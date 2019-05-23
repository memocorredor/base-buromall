<label for="field-form-prod-long">
    @lang('web_layout.local_prod_long')
</label>
<div class="form-group">
    <input id="field-form-prod-long" name="prod_long" type="text" value="{{ old('prod_long', $prod_long ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('prod_long') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('prod_long'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('prod_long') }}</strong>
    </span>
    @endif
</div>
