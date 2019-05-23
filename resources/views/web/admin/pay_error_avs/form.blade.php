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
                                @include('components.inputs.icon')
                                @include('components.inputs.color')
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-error">
                                        @lang('web_layout.local_error')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-exclamation-circle"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-error" name="error" type="text"
                                            value="{{ old('error', $error ?? '') }}"
                                            placeholder="@lang('web_layout.local_error_ph')"
                                            class="form-control letters_first {{ $errors->has('error') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('error'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('error') }}</strong>
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
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                @include('components.inputs.name_es')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                @include('components.inputs.name_pt')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                @include('components.inputs.name_en')
                                            </div>
                                        </div>
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
