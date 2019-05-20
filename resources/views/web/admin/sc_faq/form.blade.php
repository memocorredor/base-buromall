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
                                <div class="col-md-6">
                                    @include('components.in_cbo.in_cbo_sc.cbo_categorie_faqs')
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
                                                <label for="field-form-title-es">@lang('web_layout.local_title')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_es_label')
                                                    </span>
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-title-es" name="title_es" type="text"
                                                        value="{{ old('title_es', $title_es ?? '') }}"
                                                        placeholder="@lang('web_layout.local_title_ph')"
                                                        class="form-control letters_first {{ $errors->has('title_es') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('title_es'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('title_es') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @include('components.inputs.text_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-title-pt">@lang('web_layout.local_title')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_pt_label')
                                                    </span>
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-title-pt" name="title_pt" type="text"
                                                        value="{{ old('title_pt', $title_pt ?? '') }}"
                                                        placeholder="@lang('web_layout.local_title_ph')"
                                                        class="form-control letters_first {{ $errors->has('title_pt') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('title_pt'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('title_pt') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @include('components.inputs.text_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="field-form-title-en">@lang('web_layout.local_title')
                                                    <span class="lang-label">
                                                        @lang('web_layout.local_lang_en_label')
                                                    </span>
                                                </label>
                                                <div class="form-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="{{ $view_icon }}"></i>
                                                        </span>
                                                    </div>
                                                    <input id="field-form-title-en" name="title_en" type="text"
                                                        value="{{ old('title_en', $title_en ?? '') }}"
                                                        placeholder="@lang('web_layout.local_title_ph')"
                                                        class="form-control letters_first {{ $errors->has('title_en') ? ' is-invalid' : '' }}"
                                                        {{ $status_input }} autocomplete="off">
                                                    @if ( $errors->has('title_en'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('title_en') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
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
