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
                                @lang('app_fields.local_legen_default_registro')
                            </legend>
                            <div class="row">
                                <div class="input-group col-md-6 offset-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input id="toggle-event-default" type="checkbox"
                                                data-on="@lang('app_fields.local_yes')"
                                                data-off="@lang('app_fields.local_not')" data-onstyle="success"
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
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_catalog.departaments')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-tax">
                                        @lang('app_fields.local_tax')
                                    </label>
                                    <div class="form-group">
                                        <input id="field-form-tax" name="tax" type="text"
                                            value="{{ old('tax', $tax ?? '0.00') }}"
                                            class="form-control letters_first {{ $errors->has('tax') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('tax'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tax') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.inputs.name')
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
                                        @include('components.inputs.text_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        @include('components.inputs.text_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        @include('components.inputs.text_en')
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
