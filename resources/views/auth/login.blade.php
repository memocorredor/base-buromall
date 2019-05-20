@extends('layouts.app')
@section('content')
<div class="layout-user-sistem">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 css-user-op-box">
                <div class="row">
                    <div class="col-lg-8 col-md-7 op-box-form">
                        <form method="POST" action="{{ route('login') }}" role="form">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            @csrf
                            <h1>@lang('web_auth.local_login_acount')</h1>
                            <p>@lang('web_auth.local_login_acount_st')</p>
                            <div class="op-box-form-fields-login">
                                <div class="form-row">
                                    <div class="form-group input-group col-md-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input id="login" type="text"
                                            class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                            placeholder="@lang('web_auth.local_usermail')" name="login"
                                            value="{{ old('username') ?: old('email') }}" required autofocus>
                                        @if ($errors->has('username') || $errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group input-group col-md-12">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            placeholder="@lang('web_auth.local_password')" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 offset-md-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                @lang('web_auth.local_remember')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="app-button">
                                        <button type="submit" class="btn btn-labeled btn-success"
                                            style="width: 100%"><span class="btn-label-left"><i
                                                    class="fas fa-unlock-alt"></i></span>
                                            <div class="btn-label-text">
                                                <span>@lang('web_auth.local_login_get_in')</span></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="app-button">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="btn btn-labeled btn-danger"
                                            style="width: 100%"><span class="btn-label-left"><i
                                                    class="fas fa-user-ninja"></i></span>
                                            <div class="btn-label-text"><span>@lang('web_auth.local_forgot')</span>
                                            </div>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="token_form" value="token">
                            <input type="hidden" name="remember" value="0" id="switch-form" />
                            <input type="hidden" name="process" value="login" />
                            <div class="row">
                                <div class="col">
                                    <p class="small-info">@lang('web_auth.local_or_getin_social')</p>
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
                                            style="width: 100%">
                                            <span class="btn-label-left"><i class="fab fa-twitter-square"></i></span>
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
                                        <a href="{{ route('home.sc_cookies') }}">@lang('web_menu.local_menu_cookies')</a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 op-box-info">
                        <div class="op-box-info-container">
                            <h2 class="w-100">@lang('web_auth.local_create_acount')</h2>
                            <p>@lang('web_auth.local_create_acount_st')</p>
                            <div class="app-button">
                                <a href="{{ route('register') }}" class="btn btn-labeled btn-warning"
                                    style="width: 100%"><span class="btn-label-left"><i
                                            class="fas fa-id-badge"></i></span>
                                    <div class="btn-label-text"><span>@lang('web_auth.local_register')</span></div>
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
