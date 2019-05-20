<div class="row">
    <div class="col-md-12">
        <label for="field-form-description-en">@lang('web_layout.local_description')
            <span class="lang-label">
                @lang('web_layout.local_lang_en_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-signature"></i>
                </span>
            </div>
            <textarea id="field-form-description-en" name="description_en"
                placeholder="@lang('web_layout.local_description_seo_ph')"
                class="form-control seo_description_en {{ $errors->has('description_en') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off"
                maxlength="155">{{ old('description_en', $description_en ?? '') }}</textarea>
            @if ( $errors->has('description_en'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('description_en') }}</strong>
            </span>
            @endif
        </div>
        <div id="seo_description_en_count">
            <span id="seo_description_en_current">0</span>
            <span id="seo_description_en_maximum">/ 155</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-keywords-en">@lang('web_layout.local_keywords')
            <span class="lang-label">
                @lang('web_layout.local_lang_en_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-tags"></i>
                </span>
            </div>
            <input id="field-form-keywords-en" name="keywords_en" type="text"
                value="{{ old('keywords_en', $keywords_en ?? '') }}" placeholder="@lang('web_layout.local_keywords_ph')"
                class="form-control keywords_set {{ $errors->has('keywords_en') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('keywords_en'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('keywords_en') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
