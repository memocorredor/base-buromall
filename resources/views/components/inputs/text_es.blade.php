<div class="row">
    <div class="col-md-12">
        <label for="field-form-text-es">@lang('web_layout.local_text')
            <span class="lang-label">
                @lang('web_layout.local_lang_es_label')
            </span>
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-alt"></i>
                </span>
            </div>
            <textarea id="field-form-text-es" name="text_es" placeholder="@lang('web_layout.local_text_ph')"
                class="form-control {{ $errors->has('text_es') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">{{ old('text_es', $text_es ?? '') }}</textarea>
            @if ( $errors->has('text_es'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('text_es') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
