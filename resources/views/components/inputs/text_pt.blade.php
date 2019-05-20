<div class="row">
    <div class="col-md-12">
        <label for="field-form-text-pt">@lang('web_layout.local_text')
            <span class="lang-label">
                @lang('web_layout.local_lang_pt_label')
            </span>
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-alt"></i>
                </span>
            </div>
            <textarea id="field-form-text-pt" name="text_pt" placeholder="@lang('web_layout.local_text_ph')"
                class="form-control {{ $errors->has('text_pt') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">{{ old('text_pt', $text_pt ?? '') }}</textarea>
            @if ( $errors->has('text_pt'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('text_pt') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
