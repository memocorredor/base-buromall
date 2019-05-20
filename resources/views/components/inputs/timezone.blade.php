<div class="row">
    <div class="col-md-12">
        <label for="field-form-time-zone">
            @lang('app_fields.local_time_zone')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-globe"></i>
                </span>
            </div>
            <input id="field-form-time-zone" name="time_zone" type="text"
                value="{{ old('time_zone', $time_zone ?? '') }}" placeholder="America/Bogota"
                class="form-control letters_first {{ $errors->has('time_zone') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('time_zone'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('time_zone') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
