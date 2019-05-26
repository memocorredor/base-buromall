@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.forms.headers')
        </div>
        <div class="card-body">
            <form role="form" action="{{ route('profile.user_update', Auth::user()->username) }}" method="post">
                @include('components.forms.error')
                <div class="row">
                    <div class="col-md-4">
                        <fieldset class="text-semibold">
                            @include('components.forms.switch_enable_profile')
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-status-user">
                                        @lang('web_layout.local_status_user')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-md"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-status-user" type="text" value="{{ $status_user_id }}"
                                            class="form-control" disabled autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-plan">
                                        @lang('web_layout.local_plan_user')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-shoe-prints"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-plan" type="text" value="{{ $plan_id }}"
                                            class="form-control" disabled autocomplete="off">
                                    </div>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="app-button">
                                            <button type="submit" class="btn btn-labeled btn-success"
                                                style="width: 100%">
                                                <span class="btn-label-right">
                                                    <i class="fas fa-save"></i>
                                                </span>
                                                <div class="btn-label-text">
                                                    <span>@lang('web_layout.local_save_info')</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="base_id" name="base_id" value="{{  $id }}">
                            <input type="hidden" name="process" value="{{ $action_form }}" />
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-username">
                                        @lang('web_layout.local_user')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user-tie"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-username" type="text" value="{{ $username }}"
                                            class="form-control" disabled autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-gender">
                                        @lang('web_layout.local_gender_user')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-venus-mars"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-gender" type="text" value="{{ $gender_id }}"
                                            class="form-control" disabled autocomplete="off">
                                    </div>
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
                                        <input id="field-form-name" type="text" value="{{ $name }}"
                                            placeholder="@lang('web_layout.local_name')" class="form-control" disabled
                                            autocomplete="off">
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
                                        <input id="field-form-lastname" type="text" value="{{ $lastname }}"
                                            placeholder="@lang('web_layout.local_name')" class="form-control" disabled
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-email">
                                        @lang('web_layout.local_email')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-email" type="email" value="{{ $email  }}"
                                            placeholder="email@buromall.com" class="form-control" disabled
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_user.relationship')
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-birthdate">
                                        @lang('web_layout.local_birthdate')
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group date" id="user_Birthday" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                name="birthdate" data-target="#user_Birthday"
                                                value="{{ old('birthdate', $birthdate ?? '') }}" />
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
                                                        autocomplete="off"
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
                                                        autocomplete="off"
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
                                                        autocomplete="off"
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
                            <legend class="text-semibold">
                                <i class="fas fa-share-alt"></i>@lang('web_layout.local_legen_detail_contact')
                            </legend>
                            <div class="row">
                                <div class="col-md-4">
                                    @include('components.cbo.cbo_locale.countries')
                                </div>
                                <div class="col-md-4">
                                    @include('components.cbo.cbo_locale.states')
                                </div>
                                <div class="col-md-4">
                                    @include('components.cbo.cbo_locale.cities')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-address">@lang('web_layout.local_address'):
                                    </label>
                                    <div class="form-group">
                                        <textarea id="field-form-address" name="address"
                                            placeholder="@lang('web_layout.local_description_seo_ph')"
                                            class="form-control summernote-address {{ $errors->has('address') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off"
                                            maxlength="155">{{ old('address', $address ?? '') }}</textarea>
                                        @if ( $errors->has('address'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-zipcode">
                                        @lang('web_layout.local_zipcode')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-map-pin"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-zipcode" name="zipcode" type="text"
                                            value="{{ old('zipcode', $zipcode ?? '') }}"
                                            placeholder="@lang('web_layout.local_zipcode')"
                                            class="form-control only_numbers {{ $errors->has('zipcode') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('zipcode'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('zipcode') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="field-form-areacode">
                                        @lang('web_layout.local_areacode')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone-square"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-areacode" name="areacode" type="text"
                                            value="{{ old('areacode', $areacode ?? '') }}"
                                            placeholder="@lang('web_layout.local_areacode')"
                                            class="form-control only_numbers {{ $errors->has('areacode') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('areacode'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('areacode') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="field-form-phone">
                                        @lang('web_layout.local_phone')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-phone" name="phone" type="text"
                                            value="{{ old('phone', $phone ?? '') }}" placeholder="0-000-000"
                                            class="form-control only_numbers {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="field-form-mobile">
                                        @lang('web_layout.local_mobile')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-mobile-alt"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-mobile" name="mobile" type="text"
                                            value="{{ old('mobile', $mobile ?? '') }}" placeholder="0-000-000"
                                            class="form-control only_numbers {{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('mobile'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @include('components.group.contact_social')
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
