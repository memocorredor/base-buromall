<div class="row">
    <div class="col-md-12">
        <label for="field-form-title-pt">@lang('web_layout.local_title')
            <span class="lang-label">
                @lang('web_layout.local_lang_pt_label')
            </span>
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="{{ $view_icon }}"></i>
                </span>
            </div>
            <input id="field-form-title-pt" name="title_pt" type="text" value="{{ old('title_pt', $title_pt ?? '') }}"
                placeholder="@lang('web_layout.local_title_ph')"
                class="form-control letters_first seo_title_pt {{ $errors->has('title_pt') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off" maxlength="60">
            @if ( $errors->has('title_pt'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('title_pt') }}</strong>
            </span>
            @endif
        </div>
        <div id="seo_title_pt_count">
            <span id="seo_title_pt_current">0</span>
            <span id="seo_title_pt_maximum">/ 60</span>
        </div>
    </div>
</div>
