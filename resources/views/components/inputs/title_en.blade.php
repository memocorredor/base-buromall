<div class="row">
    <div class="col-md-12">
        <label for="field-form-title-en">@lang('web_layout.local_title')
            <span class="lang-label">
                @lang('web_layout.local_lang_en_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="{{ $view_icon }}"></i>
                </span>
            </div>
            <input id="field-form-title-en" name="title_en" type="text" value="{{ old('title_en', $title_en ?? '') }}"
                placeholder="@lang('web_layout.local_title_ph')"
                class="form-control seo_title_en {{ $errors->has('title_en') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off" maxlength="60">
            @if ( $errors->has('title_en'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('title_en') }}</strong>
            </span>
            @endif
        </div>
        <div id="seo_title_en_count">
            <span id="seo_title_en_current">0</span>
            <span id="seo_title_en_maximum">/ 60</span>
        </div>
    </div>
</div>
