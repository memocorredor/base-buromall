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
                                <div class="col-md-6">
                                    @include('components.in_cbo.in_cbo_website.cbo_website')
                                </div>
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_locale.countries')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-name-color">
                                        @lang('app_fields.local_color')
                                    </label>
                                    <div id="input-color" class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </div>
                                        <input id="field-form-name-color" name="name_color" type="text"
                                            value="{{ old('name_color', $name_color ?? '') }}" placeholder="#FFFFFF"
                                            class="form-control letters_first {{ $errors->has('name_color') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('name_color'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name_color') }}</strong>
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
                                        @include('components.inputs.title_es')
                                        @include('components.inputs.smn_text_es')
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        @include('components.inputs.title_pt')
                                        @include('components.inputs.smn_text_pt')
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        @include('components.inputs.title_en')
                                        @include('components.inputs.smn_text_en')
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_en')
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
