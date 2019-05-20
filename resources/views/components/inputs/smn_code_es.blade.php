<div class="row">
    <div class="col-md-12">
        <label for="field-form-text-es">@lang('web_layout.local_text_code')
            <span class="lang-label">
                @lang('web_layout.local_lang_es_label')
            </span>
        </label>
        <div class="form-group">
            <textarea id="field-form-text-es" name="text_es"
                class="form-control summernote-height {{ $errors->has('text_es') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">{{ old('text_es', $text_es ?? '') }}</textarea>
            @if ( $errors->has('text_es'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('text_es') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
