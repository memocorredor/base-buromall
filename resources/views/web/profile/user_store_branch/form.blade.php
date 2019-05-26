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
                                    <label for="field-form-username">
                                        @lang('web_layout.local_user')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-tie"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-username" type="text" value="{{ $user_id }}"
                                            class="form-control" disabled autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            @include('components.forms.dates')
                            @include('components.forms.buttons')
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_user.stores')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-name">
                                        @lang('web_layout.local_name_branch')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="{{ $view_icon }}"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-name" name="name" type="text"
                                            value="{{ old('name', $name ?? '') }}"
                                            placeholder="@lang('web_layout.local_name_branch_ph')"
                                            class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
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
                                        <a class="nav-item nav-link" id="nav-schedule-tab" href="#nav-schedule"
                                            aria-controls="nav-schedule" data-toggle="tab" role="tab"
                                            aria-selected="false">
                                            <i class="fas fa-stopwatch"></i>
                                            <label>@lang('web_layout.local_store_schedule')</label>
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
                                    <div class="tab-pane fade show" id="nav-schedule" aria-labelledby="nav-schedule-tab"
                                        role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-lun-a">
                                                    @lang('web_layout.local_lun_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-lun-a" name="lun_a" type="text"
                                                        value="{{ old('lun_a', $lun_a ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('lun_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('lun_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('lun_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-lun-c">
                                                    @lang('web_layout.local_lun_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-lun-c" name="lun_c" type="text"
                                                        value="{{ old('lun_c', $lun_c ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('lun_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('lun_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('lun_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-mar-a">
                                                    @lang('web_layout.local_mar_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-mar-a" name="mar_a" type="text"
                                                        value="{{ old('mar_a', $mar_a ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('mar_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('mar_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mar_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-mar-c">
                                                    @lang('web_layout.local_mar_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-mar-c" name="mar_c" type="text"
                                                        value="{{ old('mar_c', $mar_c ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('mar_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('mar_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mar_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-mier-a">
                                                    @lang('web_layout.local_mier_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-mier-a" name="mier_a" type="text"
                                                        value="{{ old('mier_a', $mier_a ?? '') }}"
                                                        placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('mier_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('mier_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mier_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-mier-c">
                                                    @lang('web_layout.local_mier_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-mier-c" name="mier_c" type="text"
                                                        value="{{ old('mier_c', $mier_c ?? '') }}"
                                                        placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('mier_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('mier_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mier_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-jue-a">
                                                    @lang('web_layout.local_jue_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-jue-a" name="jue_a" type="text"
                                                        value="{{ old('jue_a', $jue_a ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('jue_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('jue_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('jue_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-jue-c">
                                                    @lang('web_layout.local_jue_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-jue-c" name="jue_c" type="text"
                                                        value="{{ old('jue_c', $jue_c ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('jue_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('jue_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('jue_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-vier-a">
                                                    @lang('web_layout.local_vier_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-vier-a" name="vier_a" type="text"
                                                        value="{{ old('vier_a', $vier_a ?? '') }}"
                                                        placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('vier_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('vier_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('vier_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-vier-c">
                                                    @lang('web_layout.local_vier_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-vier-c" name="vier_c" type="text"
                                                        value="{{ old('vier_c', $vier_c ?? '') }}"
                                                        placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('vier_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('vier_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('vier_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-sab-a">
                                                    @lang('web_layout.local_sab_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-sab-a" name="sab_a" type="text"
                                                        value="{{ old('sab_a', $sab_a ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('sab_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('sab_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('sab_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-sab-c">
                                                    @lang('web_layout.local_sab_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-sab-c" name="sab_c" type="text"
                                                        value="{{ old('sab_c', $sab_c ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('sab_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('sab_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('sab_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-dom-a">
                                                    @lang('web_layout.local_dom_a')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-dom-a" name="dom_a" type="text"
                                                        value="{{ old('dom_a', $dom_a ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('dom_a') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('dom_a'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('dom_a') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-dom-c">
                                                    @lang('web_layout.local_dom_c')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-stopwatch"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-dom-c" name="dom_c" type="text"
                                                        value="{{ old('dom_c', $dom_c ?? '') }}" placeholder="00:00:00"
                                                        class="form-control letters_first {{ $errors->has('dom_c') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('dom_c'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('dom_c') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @include('components.group.contact_info')
                            @include('components.inputs.geolocation')
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
