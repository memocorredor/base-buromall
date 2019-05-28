@extends('layouts.app')
@section('content')
<div class="layout-checkout">
    <div class="container-fluid">
        <form role="form" action="{{ route('profile.make_payment') }}" method="post" class="form checkout-form">
            {{ csrf_field() }}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="nav-item">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                    title="@lang('web_layout.local_checkout_info')" class="nav-link active">
                                    <span class="round-tab">
                                        <i class="fas fa-id-card"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                    title="@lang('web_layout.local_checkout_shipping')" class="nav-link disabled">
                                    <span class="round-tab">
                                        <i class="fas fa-dolly"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                    title="@lang('web_layout.local_checkout_cart')" class="nav-link disabled">
                                    <span class="round-tab">
                                        <i class="fas fa-shopping-cart"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"
                                    title="@lang('web_layout.local_checkout_payment')" class="nav-link disabled">
                                    <span class="round-tab">
                                        <i class="fas fa-cash-register"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 checkout-inner">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-header">
                                        <i class="fas fa-id-card"></i>
                                        <h3>@lang('web_layout.local_checkout_info')</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-inner-fields">
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
                                            <input id="field-form-name" name="name_user" type="text" value="{{ $name }}"
                                                placeholder="@lang('web_layout.local_name')" class="form-control"
                                                readonly autocomplete="off">
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
                                            <input id="field-form-lastname" name="lastname_user" type="text"
                                                value="{{ $lastname }}" placeholder="@lang('web_layout.local_name')"
                                                class="form-control" readonly autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        @include('components.cbo.cbo_types.identification')
                                    </div>
                                    <div class="col-md-4">
                                        <label for="field-form-no-ident">
                                            @lang('web_layout.local_no_ident')
                                        </label>
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-passport"></i>
                                                </span>
                                            </div>
                                            <input id="field-form-no-ident" name="identification_user" type="text"
                                                value="" placeholder=" " class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="field-form-no-ident">
                                            @lang('web_layout.local_exped_identification')
                                        </label>
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-passport"></i>
                                                </span>
                                            </div>
                                            <input id="field-form-no-ident" name="exped_identification" type="text"
                                                value="" placeholder=" " class="form-control" autocomplete="off">
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
                                            <input id="field-form-email" name="email_user" type="email"
                                                value="{{ $email }}" placeholder="email@buromall.com"
                                                class="form-control" readonly autocomplete="off">
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
                                            <input id="field-form-areacode" name="areacode_user" type="text"
                                                value="{{ old('areacode', $areacode ?? '') }}"
                                                placeholder="@lang('web_layout.local_areacode')"
                                                class="form-control only_numbers {{ $errors->has('areacode') ? ' is-invalid' : '' }}"
                                                readonly autocomplete="off">
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
                                            <input id="field-form-phone" name="phone_user" type="text"
                                                value="{{ old('phone', $phone ?? '') }}" placeholder="0-000-000"
                                                class="form-control only_numbers {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                readonly autocomplete="off">
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
                                            <input id="field-form-mobile" name="mobile_user" type="text"
                                                value="{{ old('mobile', $mobile ?? '') }}" placeholder="0-000-000"
                                                class="form-control only_numbers {{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                                                readonly autocomplete="off">
                                            @if ( $errors->has('mobile'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="app-button">
                                        <button class="btn btn-labeled btn-info btn-common next-step next-button"
                                            style="width: 100%">
                                            <span class="btn-label-right">
                                                <i class="fas fa-dolly"></i>
                                            </span>
                                            <div class="btn-label-text">
                                                <span>@lang('web_layout.local_go_to')</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-header">
                                        <i class="fas fa-dolly"></i>
                                        <h3>@lang('web_layout.local_checkout_shipping')</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-inner-fields">
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
                                    <div class="col-md-4">
                                        <label for="field-form-zipcode">
                                            @lang('web_layout.local_zipcode')
                                        </label>
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-pin"></i>
                                                </span>
                                            </div>
                                            <input id="field-form-zipcode" name="zipcode_user" type="text"
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
                                    <div class="col-md-4">
                                        <label for="field-form-latitude">
                                            @lang('web_layout.local_latitude')
                                        </label>
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                            </div>
                                            <input id="field-form-latitude" name="latitude_user" type="text"
                                                value="{{ old('latitude', $latitude ?? '') }}" placeholder=""
                                                class="form-control letters_first {{ $errors->has('latitude') ? ' is-invalid' : '' }}"
                                                readonly autocomplete="off">
                                            @if ( $errors->has('latitude'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('latitude') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="field-form-longitude">
                                            @lang('web_layout.local_longitude')
                                        </label>
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                            </div>
                                            <input id="field-form-longitude" name="longitude_user" type="text"
                                                value="{{ old('longitude', $longitude ?? '') }}" placeholder=""
                                                class="form-control letters_first {{ $errors->has('longitude') ? ' is-invalid' : '' }}"
                                                readonly autocomplete="off">
                                            @if ( $errors->has('longitude'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('longitude') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="field-form-address">@lang('web_layout.local_address'):
                                        </label>
                                        <div class="form-group">
                                            <textarea id="field-form-address" name="address_user"
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
                                <legend class="text-semibold">
                                    <i
                                        class="fas fa-map-marked-alt position-left"></i>@lang('web_layout.local_legen_geolocation')
                                </legend>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="us3" style="height: 400px;"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="app-button">
                                        <button class="btn btn-labeled btn-info btn-common next-step next-button"
                                            style="width: 100%">
                                            <span class="btn-label-right">
                                                <i class="fas fa-shopping-cart"></i>
                                            </span>
                                            <div class="btn-label-text">
                                                <span>@lang('web_layout.local_go_to')</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-header">
                                        <i class="fas fa-shopping-cart"></i>
                                        <h3>@lang('web_layout.local_checkout_cart')</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-inner-fields">
                                <div class="row">


                                </div>
                                <div class="row">
                                    <div class="app-button">
                                        <button class="btn btn-labeled btn-info btn-common next-step next-button"
                                            style="width: 100%">
                                            <span class="btn-label-right">
                                                <i class="fas fa-cash-register"></i>
                                            </span>
                                            <div class="btn-label-text">
                                                <span>@lang('web_layout.local_go_to')</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-header">
                                        <i class="fas fa-cash-register"></i>
                                        <h3>@lang('web_layout.local_checkout_payment')</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-inner-fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class='card-wrapper'></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-card-number">
                                                    @lang('web_layout.local_creditcard_number')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-credit-card"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-card-number" name="number" type="text"
                                                        class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-card-name">
                                                    @lang('web_layout.local_creditcard_name')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-id-card-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-card-name" name="name" type="text"
                                                        class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="field-form-email">
                                                    @lang('web_layout.local_creditcard_cvv')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-envelope"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-email" name="cvc" type="text"
                                                        class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="field-form-email">
                                                    @lang('web_layout.local_creditcard_expire')
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-calendar-day"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-email" name="expiry" type="text"
                                                        class="form-control" autocomplete="off">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="app-button">
                                        <button type="submit" class="btn btn-labeled btn-common btn-success"
                                            style="width: 100%">
                                            <span class="btn-label-right">
                                                <i class="fas fa-shopping-cart"></i>
                                            </span>
                                            <div class="btn-label-text">
                                                <span>@lang('web_layout.local_go_to')</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 checkout-inner">
                    <div class="checkout-header">
                        <i class="fas fa-shopping-cart"></i>
                        <h3 class="text-md-center">@lang('web_layout.local_checkout_cart')</h3>
                    </div>

                    cart value
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
