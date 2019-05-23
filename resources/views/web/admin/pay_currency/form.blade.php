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
                            <legend>
                                <i class="fas fa-magic position-left"></i>
                                @lang('web_layout.local_legen_default_registro')
                            </legend>
                            <div class="row">
                                <div class="input-group col-md-6 offset-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-default" type="checkbox"
                                                data-on="@lang('web_layout.local_yes')"
                                                data-off="@lang('web_layout.local_not')" data-onstyle="success"
                                                data-offstyle="danger" data-width="80" data-height="37"
                                                {{ ($default_f === 1) ? 'checked' : '' }} {{ $status_input }}>
                                        </label>
                                        <input type="hidden" name="default_f"
                                            value="{{ ($default_f === 1) ? '1' : '0' }}" id="switch-form-default" />
                                    </div>
                                </div>
                            </div>
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
                                    @include('components.cbo.cbo_locale.countries')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-simbole">
                                        @lang('web_layout.local_simbole')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-simbole" name="simbole" type="text"
                                            value="{{ old('simbole', $simbole ?? '') }}" placeholder="$"
                                            class="form-control letters_first {{ $errors->has('simbole') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('simbole'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('simbole') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-iso">
                                        @lang('web_layout.local_iso')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-sign"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-iso" name="iso" type="text"
                                            value="{{ old('iso', $iso ?? '') }}"
                                            placeholder="@lang('web_layout.local_iso_ph')"
                                            class="form-control letters_first {{ $errors->has('iso') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('iso'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('iso') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.inputs.name')
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
