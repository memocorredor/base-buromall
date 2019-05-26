<div class="row">
    <div class="col-md-12">
        <label for="field-form-title-es">@lang('web_layout.local_title')
            <span class="lang-label">
                @lang('web_layout.local_lang_es_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="{{ $view_icon }}"></i>
                </span>
            </div>
            <input id="field-form-title-es" name="title_es" type="text" value="{{ old('title_es', $title_es ?? '') }}"
                placeholder="@lang('web_layout.local_title_ph')"
                class="form-control seo_title_es {{ $errors->has('title_es') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off" maxlength="60">
            @if ( $errors->has('title_es'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('title_es') }}</strong>
            </span>
            @endif
        </div>
        <div id="seo_title_es_count">
            <span id="seo_title_es_current">0</span>
            <span id="seo_title_es_maximum">/60</span>
        </div>
    </div>
</div>
