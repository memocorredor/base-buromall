<label for="field-form-shipping-price">
        @lang('web_layout.local_shipping_price')
    </label>
    <div class="form-group">
        <input id="field-form-shipping-price" name="shipping_price" type="text" value="{{ old('shipping_price', $shipping_price ?? '0.00') }}"
            class="form-control only_numbers_decimal {{ $errors->has('shipping_price') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
        @if ( $errors->has('shipping_price'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('shipping_price') }}</strong>
        </span>
        @endif
    </div>
