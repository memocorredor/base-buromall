<div class="row">
    <div class="col-md-12">
        <label for="field-form-description-pt">@lang('web_layout.local_description')
            <span class="lang-label">
                @lang('web_layout.local_lang_pt_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-signature"></i>
                </span>
            </div>
            <textarea id="field-form-description-pt" name="description_pt"
                placeholder="@lang('web_layout.local_description_seo_ph')"
                class="form-control seo_description_pt {{ $errors->has('description_pt') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off"
                maxlength="155">{{ old('description_pt', $description_pt ?? '') }}</textarea>
            @if ( $errors->has('description_pt'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('description_pt') }}</strong>
            </span>
            @endif
        </div>
        <div id="seo_description_pt_count">
            <span id="seo_description_pt_current">0</span>
            <span id="seo_description_pt_maximum">/ 155</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-keywords-pt">@lang('web_layout.local_keywords')
            <span class="lang-label">
                @lang('web_layout.local_lang_pt_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-tags"></i>
                </span>
            </div>
            <input id="field-form-keywords-pt" name="keywords_pt" type="text"
                value="{{ old('keywords_pt', $keywords_pt ?? '') }}" placeholder="@lang('web_layout.local_keywords_ph')"
                class="form-control keywords_set {{ $errors->has('keywords_pt') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('keywords_pt'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('keywords_pt') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
