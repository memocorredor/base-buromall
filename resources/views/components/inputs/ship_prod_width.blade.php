<label for="field-form-prod-width">
    @lang('app_fields.local_prod_width')
</label>
<div class="form-group">
    <input id="field-form-prod-width" name="prod_width" type="text" value="{{ old('prod_width', $prod_width ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('prod_width') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('prod_width'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('prod_width') }}</strong>
    </span>
    @endif
</div>
