<div class="row">
    <div class="col-md-12">
        <label for="field-form-text-en">@lang('web_layout.local_text')
            <span class="lang-label">
                @lang('web_layout.local_lang_en_label')
            </span>
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-alt"></i>
                </span>
            </div>
            <textarea id="field-form-text-en" name="text_en" placeholder="@lang('web_layout.local_text_ph')"
                class="form-control {{ $errors->has('text_en') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">{{ old('text_en', $text_en ?? '') }}</textarea>
            @if ( $errors->has('text_en'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('text_en') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
