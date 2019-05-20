<label for="field-form-price-ini">
    @lang('app_fields.local_price_ini')
</label>
<div class="form-group">
    <input id="field-form-price-ini" name="price_ini" type="text" value="{{ old('price_ini', $price_ini ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('price_ini') ? ' is-invalid' : '' }}" {{ $status_input }}
        autocomplete="off">
    @if ( $errors->has('price_ini'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('price_ini') }}</strong>
    </span>
    @endif
</div>
