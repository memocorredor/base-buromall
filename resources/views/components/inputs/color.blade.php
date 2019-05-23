<div class="col-md-6">
    <label for="field-form-name-color">
        @lang('web_layout.local_color')
    </label>
    <div id="input-color" class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text colorpicker-input-addon"><i></i></span>
        </div>
        <input id="field-form-name-color" name="color" type="text" value="{{ old('color', $color ?? '') }}"
            placeholder="#FFFFFF" class="form-control letters_first {{ $errors->has('color') ? ' is-invalid' : '' }}"
            {{ $status_input }} autocomplete="off">
        @if ( $errors->has('color'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('color') }}</strong>
        </span>
        @endif
    </div>
</div>
