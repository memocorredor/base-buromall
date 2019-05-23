<div class="row">
    <div class="col-md-12">
        <label for="field-form-url-title-pt">@lang('web_layout.local_url_destine')
            <span class="lang-label">
                @lang('web_layout.local_lang_pt_label')
            </span>
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-link"></i>
                </span>
            </div>
            <input id="field-form-url-title-pt" name="url_title_pt" type="text"
                value="{{ old('url_title_pt', $url_title_pt ?? '') }}" placeholder="https://example.com/..."
                class="form-control letters_first {{ $errors->has('url_title_pt') ? ' is-invalid' : '' }}" disabled
                autocomplete="off">
            @if ( $errors->has('url_title_pt'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('url_title_pt') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
