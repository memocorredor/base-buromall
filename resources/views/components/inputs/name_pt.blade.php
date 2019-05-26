<label for="field-form-name-pt">@lang('web_layout.local_name')
    <span class="lang-label">
        @lang('web_layout.local_lang_pt_label')
    </span>
</label>
<div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="{{ $view_icon }}"></i>
        </span>
    </div>
    <input id="field-form-name-pt" name="name_pt" type="text" value="{{ old('name_pt', $name_pt ?? '') }}"
        placeholder="@lang('web_layout.local_name_ph')"
        class="form-control {{ $errors->has('name_pt') ? ' is-invalid' : '' }}" {{ $status_input }}
        autocomplete="off">
    @if ( $errors->has('name_pt'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('name_pt') }}</strong>
    </span>
    @endif
</div>
