<label for="field-form-price-reserve">
    @lang('app_fields.local_price_reserve')
</label>
<div class="form-group">
    <input id="field-form-price-reserve" name="price_reserve" type="text" value="{{ old('price_reserve', $price_reserve ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('price_reserve') ? ' is-invalid' : '' }}" {{ $status_input }}
        autocomplete="off">
    @if ( $errors->has('price_reserve'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('price_reserve') }}</strong>
    </span>
    @endif
</div>
