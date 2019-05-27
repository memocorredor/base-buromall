<div class="col-md-6">
    <label for="field-form-iso">
        @lang('web_layout.local_iso')
    </label>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <i class="fas fa-universal-access"></i>
            </span>
        </div>
        <input id="field-form-iso" name="iso" type="text" value="{{ old('iso', $iso ?? '') }}"
            placeholder="fas fa-microscope" class="form-control {{ $errors->has('iso') ? ' is-invalid' : '' }}"
            {{ $status_input }} autocomplete="off">
        @if ( $errors->has('iso'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('iso') }}</strong>
        </span>
        @endif
    </div>
</div>
