<label for="field-form-prod-weight">
    @lang('app_fields.local_prod_weight')
</label>
<div class="form-group">
    <input id="field-form-prod-weight" name="prod_weight" type="text" value="{{ old('prod_weight', $prod_weight ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('prod_weight') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('prod_weight'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('prod_weight') }}</strong>
    </span>
    @endif
</div>
