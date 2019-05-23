<label for="field-form-prod-high">
    @lang('web_layout.local_prod_high')
</label>
<div class="form-group">
    <input id="field-form-prod-high" name="prod_high" type="text" value="{{ old('prod_high', $prod_high ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('prod_high') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('prod_high'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('prod_high') }}</strong>
    </span>
    @endif
</div>
