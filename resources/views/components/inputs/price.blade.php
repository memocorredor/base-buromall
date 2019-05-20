<label for="field-form-price">
    @lang('app_fields.local_price')
</label>
<div class="form-group">
    <input id="field-form-price" name="price" type="text" value="{{ old('price', $price ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('price') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('price'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('price') }}</strong>
    </span>
    @endif
</div>
