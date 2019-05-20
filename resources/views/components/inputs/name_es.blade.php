<label for="field-form-name-es">@lang('web_layout.local_name')
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
    <input id="field-form-name-es" name="name_es" type="text" value="{{ old('name_es', $name_es ?? '') }}"
        placeholder="@lang('web_layout.local_name_ph')"
        class="form-control letters_first {{ $errors->has('name_es') ? ' is-invalid' : '' }}" {{ $status_input }}
        autocomplete="off">
    @if ( $errors->has('name_es'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('name_es') }}</strong>
    </span>
    @endif
</div>
