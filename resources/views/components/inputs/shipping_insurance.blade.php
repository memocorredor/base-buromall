<label for="field-form-insurance">
    @lang('app_fields.local_insurance')
</label>
<div class="form-group">
    <input id="field-form-insurance" name="insurance" type="text" value="{{ old('insurance', $insurance ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('insurance') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('insurance'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('insurance') }}</strong>
    </span>
    @endif
</div>
