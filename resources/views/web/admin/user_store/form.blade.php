@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.forms.headers')
        </div>
        <div class="card-body">
            <form role="form" action="{{ route($route_form, $id) }}" method="post">
                @include('components.forms.error')
                <div class="row">
                    <div class="col-md-4">
                        <fieldset class="text-semibold">
                            @include('components.forms.switch_enable')
                            @include('components.forms.action')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.cbo.cbo_user.user')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-porcent-pay">
                                        @lang('web_layout.local_porcent_pay')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-piggy-bank"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-porcent-pay" name="porcent_pay" type="text"
                                            value="{{ old('porcent_pay', $porcent_pay ?? '') }}" placeholder=""
                                            class="form-control letters_first {{ $errors->has('porcent_pay') ? ' is-invalid' : '' }}"
                                            disabled autocomplete="off">
                                        @if ( $errors->has('porcent_pay'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('porcent_pay') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-cent-pay">
                                        @lang('web_layout.local_cent_pay')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-money-check-alt"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-cent-pay" name="cent_pay" type="text"
                                            value="{{ old('cent_pay', $cent_pay ?? '') }}" placeholder=""
                                            class="form-control letters_first {{ $errors->has('cent_pay') ? ' is-invalid' : '' }}"
                                            disabled autocomplete="off">
                                        @if ( $errors->has('cent_pay'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('cent_pay') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-url-name">
                                        @lang('web_layout.local_url_name')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-satellite"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-url-name" name="url_name" type="text"
                                            value="{{ old('url_name', $url_name ?? '') }}"
                                            placeholder="@lang('web_layout.local_url_name_ph')"
                                            class="form-control letters_first {{ $errors->has('url_name') ? ' is-invalid' : '' }}"
                                            disabled autocomplete="off">
                                        @if ( $errors->has('url_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('url_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @include('components.inputs.timezone')
                            @include('components.forms.dates')
                            @include('components.forms.buttons')
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_types.store')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-name">
                                        @lang('web_layout.local_name_store')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="{{ $view_icon }}"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-name" name="name" type="text"
                                            value="{{ old('name', $name ?? '') }}"
                                            placeholder="@lang('web_layout.local_name_store_ph')"
                                            class="form-control letters_first {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tabbable">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @include('components.forms.tabs_flags')
                                        <a class="nav-item nav-link" id="nav-bank-tab" href="#nav-bank"
                                            aria-controls="nav-bank" data-toggle="tab" role="tab" aria-selected="false">
                                            <i class="fas fa-funnel-dollar"></i>
                                            <label>@lang('web_layout.local_store_bank')</label>
                                        </a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-locale-es"
                                        aria-labelledby="nav-locale-es-tab" role="tabpanel">
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_en')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-bank" aria-labelledby="nav-bank-tab"
                                        role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-no-company">
                                                    @lang('web_layout.local_no_company')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fab fa-black-tie"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-no-company" name="no_company" type="text"
                                                        value="{{ old('no_company', $no_company ?? '') }}"
                                                        placeholder="@lang('web_layout.local_no_company_ph')"
                                                        class="form-control letters_first {{ $errors->has('no_company') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('no_company'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('no_company') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-merchant">
                                                    @lang('web_layout.local_merchant')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-receipt"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-merchant" name="merchant" type="text"
                                                        value="{{ old('merchant', $merchant ?? '') }}"
                                                        placeholder="@lang('web_layout.local_merchant_ph')"
                                                        class="form-control letters_first {{ $errors->has('merchant') ? ' is-invalid' : '' }}"
                                                        disable autocomplete="off">
                                                    @if ( $errors->has('merchant'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('merchant') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-name-bank">
                                                    @lang('web_layout.local_name_bank')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-landmark"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-name-bank" name="name_bank" type="text"
                                                        value="{{ old('name_bank', $name_bank ?? '') }}"
                                                        placeholder="Davivienda"
                                                        class="form-control letters_first {{ $errors->has('name_bank') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('name_bank'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name_bank') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-name-acount">
                                                    @lang('web_layout.local_name_acount')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-address-book"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-name-acount" name="name_acount" type="text"
                                                        value="{{ old('name_acount', $name_acount ?? '') }}"
                                                        placeholder="Barumall"
                                                        class="form-control letters_first {{ $errors->has('name_acount') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('name_acount'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name_acount') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-no-acount">
                                                    @lang('web_layout.local_no_acount')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-hand-holding-usd"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-no-acount" name="no_acount" type="text"
                                                        value="{{ old('no_acount', $no_acount ?? '') }}" placeholder=""
                                                        class="form-control letters_first {{ $errors->has('no_acount') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('no_acount'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('no_acount') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-semibold">
                                            <i class="fas fa-random"></i>
                                            @lang('web_layout.local_legen_detail_transfer')
                                        </legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-iban">
                                                    @lang('web_layout.local_iban')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-book"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-iban" name="iban" type="text"
                                                        value="{{ old('iban', $iban ?? '') }}"
                                                        placeholder="@lang('web_layout.local_iban_ph')"
                                                        class="form-control letters_first {{ $errors->has('iban') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('iban'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('iban') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-swift">
                                                    @lang('web_layout.local_swift')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-random"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-swift" name="swift" type="text"
                                                        value="{{ old('swift', $swift ?? '') }}"
                                                        placeholder="@lang('web_layout.local_swift_ph')"
                                                        class="form-control letters_first {{ $errors->has('swift') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('swift'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('swift') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('components.group.contact_info')
                            @include('components.group.contact_social')
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
