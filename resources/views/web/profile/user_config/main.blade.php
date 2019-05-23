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
                                        <input id="field-form-username" name="username" type="text"
                                            value="{{ old('username', $username ?? '') }}"
                                            placeholder="@lang('web_layout.local_user')"
                                            class="form-control letters_first {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                            disabled autocomplete="off">
                                        @if ( $errors->has('username'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.cbo.cbo_status.user')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.cbo.cbo_user.plans')
                                </div>
                            </div>
                            <legend>
                                <i class="far fa-newspaper position-left"></i>
                                @lang('web_layout.local_legen_newsletter')
                            </legend>
                            <div class="row">
                                <div class="input-group col-md-6 offset-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-con-newsletter-enable" type="checkbox"
                                                data-on="@lang('web_layout.local_yes')"
                                                data-off="@lang('web_layout.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ($con_newsletter === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input type="hidden" name="con_newsletter"
                                            value="{{ ($con_newsletter === 1) ? '1' : '0' }}"
                                            id="switch-con-newsletter-enable" />
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
                                    @include('components.cbo.cbo_user.gender')
                                </div>
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_user.relationship')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-name">
                                        @lang('web_layout.local_name')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-name" name="name" type="text"
                                            value="{{ old('name', $name ?? '') }}"
                                            placeholder="@lang('web_layout.local_name')"
                                            class="form-control letters_first {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-lastname">
                                        @lang('web_layout.local_lastname')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-friends"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-lastname" name="lastname" type="text"
                                            value="{{ old('lastname', $lastname ?? '') }}"
                                            placeholder="@lang('web_layout.local_name')"
                                            class="form-control letters_first {{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('lastname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-birthdate">
                                        @lang('web_layout.local_birthdate')
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group date" id="user_Birthday" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" name="birthdate"
                                                data-target="#user_Birthday" value="{{ old('birthdate', $birthdate ?? '') }}"/>
                                            <div class="input-group-append" data-target="#user_Birthday"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fas fa-birthday-cake"></i></div>
                                            </div>
                                        </div>
                                        @if ( $errors->has('birthdate'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
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
