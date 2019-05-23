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
                            <legend>
                                <i class="fas fa-lightbulb position-left"></i>
                                @lang('web_layout.local_legen_highlight')
                            </legend>
                            <div class="row">
                                <div class="input-group col-md-6 offset-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-highlight" type="checkbox"
                                                data-on="@lang('web_layout.local_yes')"
                                                data-off="@lang('web_layout.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ($highlight === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input type="hidden" name="highlight"
                                            value="{{ ($highlight === 1) ? '1' : '0' }}" id="switch-form-highlight" />
                                    </div>
                                </div>
                            </div>
                            <legend>
                                <i class="fas fa-user-cog position-left"></i>
                                @lang('web_layout.local_legen_enable_profile')
                            </legend>
                            <div class="row">
                                <div class="input-group col-md-6 offset-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-enable-profile" type="checkbox"
                                                data-on="@lang('web_layout.local_yes')"
                                                data-off="@lang('web_layout.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ($enable_profile === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input type="hidden" name="enable_profile"
                                            value="{{ ($enable_profile === 1) ? '1' : '0' }}"
                                            id="switch-form-enable-profile" />
                                    </div>
                                </div>
                            </div>
                            @include('components.forms.action')
                            @include('components.forms.dates')
                            @include('components.forms.buttons')
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="tabbable">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @include('components.forms.tabs_flags')
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-locale-es"
                                        aria-labelledby="nav-locale-es-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @include('components.inputs.name_es')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label
                                                    for="field-form-description-es">@lang('web_layout.local_description')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_es_label')
                                                    </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-file-signature"></i>
                                                        </span>
                                                    </div>
                                                    <textarea id="field-form-description-es" name="description_es"
                                                        placeholder="@lang('web_layout.local_description_seo_ph')"
                                                        class="form-control seo_description_es {{ $errors->has('description_es') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off"
                                                        maxlength="155">{{ old('description_es', $description_es ?? '') }}</textarea>
                                                    @if ( $errors->has('description_es'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description_es') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div id="seo_description_es_count">
                                                    <span id="seo_description_es_current">0</span>
                                                    <span id="seo_description_es_maximum">/155</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @include('components.inputs.name_pt')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label
                                                    for="field-form-description-pt">@lang('web_layout.local_description')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_pt_label')
                                                    </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-file-signature"></i>
                                                        </span>
                                                    </div>
                                                    <textarea id="field-form-description-pt" name="description_pt"
                                                        placeholder="@lang('web_layout.local_description_seo_ph')"
                                                        class="form-control seo_description_pt {{ $errors->has('description_pt') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off"
                                                        maxlength="155">{{ old('description_pt', $description_pt ?? '') }}</textarea>
                                                    @if ( $errors->has('description_pt'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description_pt') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div id="seo_description_pt_count">
                                                    <span id="seo_description_pt_current">0</span>
                                                    <span id="seo_description_pt_maximum">/ 155</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-name-en">@lang('web_layout.local_name')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_en_label')
                                                    </span>
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-name-en" name="name_en" type="text"
                                                        value="{{ old('name_en', $name_en ?? '') }}"
                                                        placeholder="@lang('web_layout.local_name_ph')"
                                                        class="form-control letters_first {{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('name_en'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name_en') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label
                                                    for="field-form-description-en">@lang('web_layout.local_description')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_en_label')
                                                    </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-file-signature"></i>
                                                        </span>
                                                    </div>
                                                    <textarea id="field-form-description-en" name="description_en"
                                                        placeholder="@lang('web_layout.local_description_seo_ph')"
                                                        class="form-control seo_description_en {{ $errors->has('description_en') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off"
                                                        maxlength="155">{{ old('description_en', $description_en ?? '') }}</textarea>
                                                    @if ( $errors->has('description_en'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('description_en') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div id="seo_description_en_count">
                                                    <span id="seo_description_en_current">0</span>
                                                    <span id="seo_description_en_maximum">/ 155</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <legend>
                                <i class="fas fa-indent position-left"></i>
                                @lang('web_layout.local_legen_enable_plans_sis')
                            </legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-days-recu">
                                        @lang('web_layout.local_nu_days_recu')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-days-recu" name="nu_days_recu" type="text"
                                            value="{{ old('nu_days_recu', $nu_days_recu ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_days_recu') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_days_recu'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_days_recu') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-price">
                                        @lang('web_layout.local_price')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-price" name="price" type="text"
                                            value="{{ old('price', $price ?? '0.00') }}"
                                            class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('price'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-stores">
                                        @lang('web_layout.local_nu_stores')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-stores" name="nu_stores" type="text"
                                            value="{{ old('nu_stores', $nu_stores ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_stores') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_stores'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_stores') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-nu-branch">
                                        @lang('web_layout.local_nu_branch')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-branch" name="nu_branch" type="text"
                                            value="{{ old('nu_branch', $nu_branch ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_branch') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_branch'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_branch') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-employes">
                                        @lang('web_layout.local_nu_employes')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-employes" name="nu_employes" type="text"
                                            value="{{ old('nu_employes', $nu_employes ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_employes') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_employes'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_employes') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-nu-products">
                                        @lang('web_layout.local_nu_products')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-products" name="nu_products" type="text"
                                            value="{{ old('nu_products', $nu_products ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_products') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_products'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_products') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-auction">
                                        @lang('web_layout.local_nu_auction')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-auction" name="nu_auction" type="text"
                                            value="{{ old('nu_auction', $nu_auction ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_auction') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_auction'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_auction') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-smedia">
                                        @lang('web_layout.local_nu_smedia')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-smedia" name="nu_smedia" type="text"
                                            value="{{ old('nu_smedia', $nu_smedia ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_smedia') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_smedia'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_smedia') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-geolocation">
                                        @lang('web_layout.local_nu_geolocation')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-geolocation" name="nu_geolocation" type="text"
                                            value="{{ old('nu_geolocation', $nu_geolocation ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_geolocation') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_geolocation'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_geolocation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-nu-banners">
                                        @lang('web_layout.local_nu_banners')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-nu-banners" name="nu_banners" type="text"
                                            value="{{ old('nu_banners', $nu_banners ?? '') }}"
                                            class="form-control letters_first {{ $errors->has('nu_banners') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('nu_banners'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nu_banners') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
