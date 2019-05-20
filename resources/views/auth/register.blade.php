@extends('layouts.app')
@section('content')
<div class="layout-user-sistem">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 css-user-op-box">
                <div class="row">
                    <div class="col-lg-8 col-md-7 op-box-form">
                        <form method="POST" action="{{ route('register') }}" role="form">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            @csrf
                            <fieldset>
                                <h1>@lang('web_auth.local_create_acount')</h1>
                                <p>@lang('web_auth.local_create_acount_st')</p>
                                <div class="op-box-form-fields-register">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="field-form-gender-id">
                                                @lang('web_layout.local_cbo_gender')
                                            </label>
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-venus-mars"></i>
                                                        </div>
                                                    </div>
                                                    <select id="field-form-gender-id" name="gender_id"
                                                        class="form-control border selectpicker {{ $errors->has('gender_id') ? ' is-invalid' : '' }}"
                                                        data-live-search="true" data-size="10">
                                                        @php
                                                        $local_name = 'name_' .$meta_lang;
                                                        $res_gender = old('gender_id')
                                                        @endphp
                                                        <option value="0">@lang('web_layout.local_select')</option>
                                                        @foreach ($data_gender as $row_gender)
                                                        <option value="{{ $row_gender->id }}"
                                                            @if($res_gender===$row_gender-> id) selected @endif>
                                                            {{ $row_gender->$local_name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @if ( $errors->has('gender_id'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('gender_id') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input id="field-name" name="name"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_auth_name')"
                                                value="{{ old('name') }}" type="text" autocomplete="off" required>
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-user-friends"></i>
                                                </span>
                                            </div>
                                            <input id="field-lastname" name="lastname"
                                                class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_auth_lastname')"
                                                value="{{ old('lastname') }}" type="text" autocomplete="off" required>
                                            @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group input-group col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input id="field-email" name="email"
                                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_auth_email')"
                                                value="{{ old('email') }}" type="email" autocomplete="off" required>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input id="field-username" name="username"
                                                class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_auth_username')"
                                                value="{{ old('username') }}" type="text" autocomplete="off" required>
                                            @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input id="field-password" name="password"
                                                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_password')" value="" type="password"
                                                autocomplete="off" required>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input id="password-confirm" name="password_confirmation"
                                                class="form-control {{ $errors->has('password_again') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_password_again')" value=""
                                                type="password" autocomplete="off" required>
                                            @if ($errors->has('password_again'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password_again') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group input-group col-md-6">
                                            <div class="checkbox">
                                                <label for="field-">
                                                    <input id="toggle-event-enable" type="checkbox"
                                                        data-on="@lang('web_layout.local_yes')"
                                                        data-off="@lang('web_layout.local_not')" data-onstyle="success"
                                                        data-offstyle="info" data-width="60" data-height="39">
                                                    @lang('web_auth.local_newsletter')
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="app-button">
                                            <button type="submit" id="send_ch" class="btn btn-labeled btn-success"
                                                style="width: 100%">
                                                <span class="btn-label-left">
                                                    <i class="far fa-save"></i>
                                                </span>
                                                <div class="btn-label-text">
                                                    <span>@lang('web_auth.local_register_create_acount')</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="token_form" value="tokeb">
                                <input type="hidden" name="newsletter" value="0" id="switch-form-enable" />
                                <input type="hidden" name="process" value="register" />
                                <div class="row">
                                    <div class="col">
                                        <p class="small-info">@lang('web_auth.local_or_regi_social')</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="app-button">
                                            <a href="{{url('/redirect')}}" class="btn btn-labeled btn-info"
                                                style="width: 100%"><span class="btn-label-left"><i
                                                        class="fab fa-facebook"></i></span>
                                                <div class="btn-label-text"><span>FACEBOOK</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-button">
                                            <a href="{{ url('/') }}" class="btn btn-labeled btn-secondary"
                                                style="width: 100%"><span class="btn-label-left"><i
                                                        class="fab fa-twitter-square"></i></span>
                                                <div class="btn-label-text"><span>TWITTER</span></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="for-in-info">
                                        <span class="for-in-info-txt">@lang('web_auth.local_agree_getin') {{ ' ' }}
                                            <a href="{{ route('home.sc_term') }}">@lang('web_menu.local_menu_terms')
                                                {{ ' ' }}</a>
                                            @lang('web_auth.local_and') {{ ' ' }}
                                            <a
                                                href="{{ route('home.sc_cookies') }}">@lang('web_menu.local_menu_cookies')</a>
                                        </span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 op-box-info">
                        <div class="op-box-info-container">
                            <h2 class="w-100">@lang('web_auth.local_aside_title_acount')</h2>
                            <p>@lang('web_auth.local_aside_login_acount')</p>
                            <div class="app-button">
                                <a href="{{ route('login') }}" class="btn btn-labeled btn-warning"
                                    style="width: 100%"><span class="btn-label-left">
                                        <i class="fas fa-user-secret"></i>
                                    </span>
                                    <div class="btn-label-text">
                                        <span>@lang('web_auth.local_login_acount')</span>
                                    </div>
                                </a>
                            </div>
                            <p>@lang('web_auth.local_aside_forgot_acount')</p>
                            <div class="app-button">
                                <a href="{{ route('password.request') }}" class="btn btn-labeled btn-danger"
                                    style="width: 100%"><span class="btn-label-left"><i
                                            class="fas fa-user-ninja"></i></span>
                                    <div class="btn-label-text"><span>@lang('web_auth.local_forgot')</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
