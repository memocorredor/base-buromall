<legend class="text-semibold">
    <i class="fas fa-share-alt"></i>@lang('web_layout.local_legen_detail_contact')
</legend>
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
            <input id="field-form-email" name="email" type="email" value="{{ old('email', $email ?? '') }}"
                placeholder="email@buromall.com"
                class="form-control lowercase_set {{ $errors->has('email') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">
            @if ( $errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
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
            <textarea id="field-form-address" name="address" placeholder="@lang('web_layout.local_description_seo_ph')"
                class="form-control summernote-address {{ $errors->has('address') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off" maxlength="155">{{ old('address', $address ?? '') }}</textarea>
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
            <input id="field-form-zipcode" name="zipcode" type="text" value="{{ old('zipcode', $zipcode ?? '') }}"
                placeholder="@lang('web_layout.local_zipcode')"
                class="form-control only_numbers {{ $errors->has('zipcode') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">
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
            <input id="field-form-areacode" name="areacode" type="text" value="{{ old('areacode', $areacode ?? '') }}"
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
            <input id="field-form-phone" name="phone" type="text" value="{{ old('phone', $phone ?? '') }}"
                placeholder="0-000-000"
                class="form-control only_numbers {{ $errors->has('phone') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">
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
            <input id="field-form-mobile" name="mobile" type="text" value="{{ old('mobile', $mobile ?? '') }}"
                placeholder="0-000-000"
                class="form-control only_numbers {{ $errors->has('mobile') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">
            @if ( $errors->has('mobile'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('mobile') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
