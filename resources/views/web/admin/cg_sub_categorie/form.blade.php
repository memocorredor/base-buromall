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
                            @include('components.forms.dates')
                            @include('components.forms.buttons')
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_catalog.departaments')
                                </div>
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_catalog.categories')
                                </div>
                            </div>
                            <div class="row">
                                @include('components.inputs.icon')
                                @include('components.inputs.color')
                            </div>
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
                                                <label for="field-form-url-name-es">
                                                    @lang('app_fields.local_url_name')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-external-link-square-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-url-name-es" name="url_name_es" type="text"
                                                        value="{{ old('url_name_es', $url_name_es ?? '') }}"
                                                        placeholder="@lang('app_fields.local_url_name_ph')"
                                                        class="form-control letters_first {{ $errors->has('url_name_es') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('url_name_es'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('url_name_es') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @include('components.inputs.name_es')
                                            </div>
                                        </div>
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.title_es')
                                        @include('components.inputs.des_key_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-url-name-pt">@lang('app_fields.local_url_name')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_pt_label')
                                                    </span>
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-external-link-square-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-url-name-pt" name="url_name_pt" type="text"
                                                        value="{{ old('url_name_pt', $url_name_pt ?? '') }}"
                                                        placeholder="@lang('app_fields.local_url_name_ph')"
                                                        class="form-control letters_first {{ $errors->has('url_name_pt') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('url_name_pt'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('url_name_pt') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @include('components.inputs.name_pt')
                                            </div>
                                        </div>
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.title_pt')
                                        @include('components.inputs.des_key_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-url-name-en">@lang('app_fields.local_url_name')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_en_label')
                                                    </span>
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-external-link-square-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-url-name-en" name="url_name_en" type="text"
                                                        value="{{ old('url_name_en', $url_name_en ?? '') }}"
                                                        placeholder="@lang('app_fields.local_url_name_ph')"
                                                        class="form-control letters_first {{ $errors->has('url_name_en') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('url_name_en'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('url_name_en') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
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
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.title_en')
                                        @include('components.inputs.des_key_en')
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
