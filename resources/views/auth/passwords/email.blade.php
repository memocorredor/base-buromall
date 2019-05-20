@extends('layouts.app')
@section('content')
<div class="layout-user-sistem">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 css-user-op-box">
                <div class="row">
                    <div class="col-lg-8 col-md-7 op-box-form">
                        <form method="POST" action="{{ route('password.email') }}" role="form">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            @csrf
                            <fieldset>
                                <h1>@lang('web_auth.local_forgot_acount')</h1>
                                <p>@lang('web_auth.local_forgot_acount_st')</p>
                                <div class="op-box-form-fields-register">

                                    <div class="row">
                                        <div class="form-group input-group col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input id="field-email" name="email"
                                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                placeholder="@lang('web_auth.local_forgot_email')"
                                                value="{{ old('email') }}" type="email" autocomplete="off" required>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="app-button">
                                            <button type="submit" id="send_ch" class="btn btn-labeled btn-success"
                                                style="width: 100%">
                                                <span class="btn-label-left">
                                                    <i class="fas fa-mail-bulk"></i>
                                                </span>
                                                <div class="btn-label-text">
                                                    <span>@lang('web_auth.local_forgot_send_pass')</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>@lang('web_auth.local_forgo_txt')</p>
                                    </div>
                                </div>
                                <input type="hidden" name="token_form" value="tokeb">
                                <input type="hidden" name="newsletter" value="0" id="switch-form-enable" />
                                <input type="hidden" name="process" value="forgot" />
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 op-box-info">
                        <div class="op-box-info-container">
                            <h2 class="w-100">@lang('web_auth.local_aside_title_acount')</h2>
                            <p>@lang('web_auth.local_aside_login_acount')</p>
                            <div class="app-button">
                                <a href="{{ route('login') }}" class="btn btn-labeled btn-danger"
                                    style="width: 100%"><span class="btn-label-left">
                                        <i class="fas fa-user-secret"></i>
                                    </span>
                                    <div class="btn-label-text">
                                        <span>@lang('web_auth.local_login_acount')</span>
                                    </div>
                                </a>
                            </div>
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
