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
                            @include('components.forms.action')
                            @include('components.inputs.timezone')
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-google-analitic">
                                        @lang('app_fields.local_google_analitic')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-google"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-google-analitic" name="google_analitic" type="text"
                                            value="{{ old('google_analitic', $google_analitic ?? '') }}"
                                            placeholder="UI-"
                                            class="form-control letters_first {{ $errors->has('google_analitic') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('google_analitic'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('google_analitic') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-name-page">
                                        @lang('web_layout.local_name_page')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-satellite"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-name-page" name="name_page" type="text"
                                            value="{{ old('name_page', $name_page ?? '') }}"
                                            placeholder="@lang('web_layout.local_name_page_ph')"
                                            class="form-control letters_first {{ $errors->has('name_page') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('name_page'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name_page') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-url-web">
                                        @lang('app_fields.local_url_web')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-link"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-url-web" name="url_web" type="text"
                                            value="{{ old('url_web', $url_web ?? '') }}" placeholder="www.buromall.com"
                                            class="form-control lowercase_set {{ $errors->has('url_web') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('url_web'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('url_web') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-no-ruc">
                                        @lang('app_fields.local_no_ruc')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-money-check"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-no-ruc" name="no_ruc" type="text"
                                            value="{{ old('no_ruc', $no_ruc ?? '') }}"
                                            placeholder="@lang('app_fields.local_no_ruc_ph')"
                                            class="form-control {{ $errors->has('no_ruc') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('no_ruc'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('no_ruc') }}</strong>
                                        </span>
                                        @endif
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
                            <div class="tabbable">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @include('components.forms.tabs_flags')
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-locale-es"
                                        aria-labelledby="nav-locale-es-tab" role="tabpanel">
                                        @include('components.forms.legend_seo')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-title-es">@lang('web_layout.local_name_web')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_es_label')
                                                    </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-title-es" name="title_es" type="text"
                                                        value="{{ old('title_es', $title_es ?? '') }}"
                                                        placeholder="@lang('web_layout.local_name_web_ph')"
                                                        class="form-control letters_first seo_title_es {{ $errors->has('title_es') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off" maxlength="60">
                                                    @if ( $errors->has('title_es'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('title_es') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div id="seo_title_es_count">
                                                    <span id="seo_title_es_current">0</span>
                                                    <span id="seo_title_es_maximum">/60</span>
                                                </div>
                                            </div>
                                        </div>
                                        @include('components.inputs.des_key_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        @include('components.forms.legend_seo')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-title-pt">@lang('web_layout.local_name_web')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_pt_label')
                                                    </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-title-pt" name="title_pt" type="text"
                                                        value="{{ old('title_pt', $title_pt ?? '') }}"
                                                        placeholder="@lang('web_layout.local_name_web_ph')"
                                                        class="form-control letters_first seo_title_pt {{ $errors->has('title_pt') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off" maxlength="60">
                                                    @if ( $errors->has('title_pt'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('title_pt') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div id="seo_title_pt_count">
                                                    <span id="seo_title_pt_current">0</span>
                                                    <span id="seo_title_pt_maximum">/ 60</span>
                                                </div>
                                            </div>
                                        </div>
                                        @include('components.inputs.des_key_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        @include('components.forms.legend_seo')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-title-en">@lang('web_layout.local_name_web')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_en_label')
                                                    </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-title-en" name="title_en" type="text"
                                                        value="{{ old('title_en', $title_en ?? '') }}"
                                                        placeholder="@lang('web_layout.local_name_web_ph')"
                                                        class="form-control letters_first seo_title_en {{ $errors->has('title_en') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off" maxlength="60">
                                                    @if ( $errors->has('title_en'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('title_en') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div id="seo_title_en_count">
                                                    <span id="seo_title_en_current">0</span>
                                                    <span id="seo_title_en_maximum">/ 60</span>
                                                </div>
                                            </div>
                                        </div>
                                        @include('components.inputs.des_key_en')
                                    </div>
                                </div>
                            </div>
                            @include('components.group.contact_info')
                            @include('components.group.contact_social')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-android">
                                        @lang('app_fields.local_android')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-android"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-android" name="android" type="text"
                                            value="{{ old('android', $android ?? '') }}"
                                            placeholder="@lang('app_fields.local_android_ph')"
                                            class="form-control lowercase_set {{ $errors->has('android') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('android'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('android') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group input-group col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-android-enable" type="checkbox"
                                                data-on="@lang('app_fields.local_yes')"
                                                data-off="@lang('app_fields.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ( $android_enable === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input id="switch-form-android-enable" name="android_enable" type="hidden"
                                            value="{{ ( $android_enable === 1) ? '1' : '0'  }}" /></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-itunes">
                                        @lang('app_fields.local_itunes')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-apple"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-itunes" name="itunes" type="text"
                                            value="{{ old('itunes', $itunes ?? '') }}"
                                            placeholder="@lang('app_fields.local_itunes_ph')"
                                            class="form-control lowercase_set {{ $errors->has('itunes') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('itunes'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('itunes') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group input-group col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-itunes-enable" type="checkbox"
                                                data-on="@lang('app_fields.local_yes')"
                                                data-off="@lang('app_fields.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ( $itunes_enable === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input id="switch-form-itunes-enable" name="itunes_enable" type="hidden"
                                            value="{{ ( $itunes_enable === 1) ? '1' : '0'  }}" /></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-windows">
                                        @lang('app_fields.local_windows')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fab fa-windows"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-windows" name="windows" type="text"
                                            value="{{ old('windows', $windows ?? '') }}"
                                            placeholder="@lang('app_fields.local_windows_ph')"
                                            class="form-control lowercase_set {{ $errors->has('windows') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('windows'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('windows') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group input-group col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-windows-enable" type="checkbox"
                                                data-on="@lang('app_fields.local_yes')"
                                                data-off="@lang('app_fields.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ( $windows_enable === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input id="switch-form-windows-enable" name="windows_enable" type="hidden"
                                            value="{{ ( $windows_enable === 1) ? '1' : '0'  }}" /></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-author">
                                        @lang('app_fields.local_author')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-tie"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-author" name="author" type="text"
                                            value="{{ old('author', $author ?? '') }}"
                                            placeholder="@lang('app_fields.local_author_ph')"
                                            class="form-control letters_first {{ $errors->has('author') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('author'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('author') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-copyright">
                                        @lang('app_fields.local_copyright')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-copyright"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-copyright" name="copyright" type="text"
                                            value="{{ old('copyright', $copyright ?? '') }}"
                                            placeholder="@lang('app_fields.local_copyright_ph')"
                                            class="form-control letters_first {{ $errors->has('copyright') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('copyright'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('copyright') }}</strong>
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
