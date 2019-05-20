<label for="field-form-min-biders">
        @lang('app_fields.local_min_biders')
    </label>
    <div class="form-group">
        <input id="field-form-min-biders" name="min_biders" type="text" value="{{ old('min_biders', $min_biders ?? '0') }}"
            class="form-control only_numbers_decimal {{ $errors->has('min_biders') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
        @if ( $errors->has('min_biders'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('min_biders') }}</strong>
        </span>
        @endif
    </div>
