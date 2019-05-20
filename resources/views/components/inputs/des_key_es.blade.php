<div class="row">
    <div class="col-md-12">
        <label for="field-form-description-es">@lang('web_layout.local_description')
            <span class="lang-label">
                @lang('web_layout.local_lang_es_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-signature"></i>
                </span>
            </div>
            <textarea id="field-form-description-es" name="description_es"
                placeholder="@lang('web_layout.local_description_seo_ph')"
                class="form-control seo_description_es {{ $errors->has('description_es') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off"
                maxlength="155">{{ old('description_es', $description_es ?? '') }}</textarea>
            @if ( $errors->has('description_es'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('description_es') }}</strong>
            </span>
            @endif
        </div>
        <div id="seo_description_es_count">
            <span id="seo_description_es_current">0</span>
            <span id="seo_description_es_maximum">/155</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-keywords-es">@lang('web_layout.local_keywords')
            <span class="lang-label">
                @lang('web_layout.local_lang_es_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-tags"></i>
                </span>
            </div>
            <input id="field-form-keywords-es" name="keywords_es" type="text"
                value="{{ old('keywords_es', $keywords_es ?? '') }}" placeholder="@lang('web_layout.local_keywords_ph')"
                class="form-control keywords_set {{ $errors->has('keywords_es') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('keywords_es'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('keywords_es') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
