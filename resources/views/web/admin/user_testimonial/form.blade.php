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
                                    @include('components.cbo.cbo_user.user')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-text">
                                        @lang('web_layout.local_description')
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="{{ $view_icon }}"></i>
                                            </span>
                                        </div>
                                        <textarea id="field-form-text" name="text"
                                            placeholder="@lang('web_layout.local_description_ph')"
                                            class="form-control {{ $errors->has('text') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off"
                                            maxlength="155">{{ old('text', $text ?? '') }}</textarea>
                                        @if ( $errors->has('text'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('text') }}</strong>
                                        </span>
                                        @endif
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
