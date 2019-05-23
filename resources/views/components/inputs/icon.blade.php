<div class="col-md-6">
    <label for="field-form-icon">
        @lang('web_layout.local_icon')
    </label>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-microscope"></i>
            </span>
        </div>
        <input id="field-form-icon" name="icon" type="text" value="{{ old('icon', $icon ?? '') }}"
            placeholder="fas fa-microscope" class="form-control {{ $errors->has('icon') ? ' is-invalid' : '' }}"
            {{ $status_input }} autocomplete="off">
        @if ( $errors->has('icon'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('icon') }}</strong>
        </span>
        @endif
    </div>
</div>
