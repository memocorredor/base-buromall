<label for="field-form-price-incrise">
        @lang('app_fields.local_price_incrise')
    </label>
    <div class="form-group">
        <input id="field-form-price-incrise" name="price_incrise" type="text" value="{{ old('price_incrise', $price_incrise ?? '0.00') }}"
            class="form-control only_numbers_decimal {{ $errors->has('price_incrise') ? ' is-invalid' : '' }}" {{ $status_input }}
            autocomplete="off">
        @if ( $errors->has('price_incrise'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('price_incrise') }}</strong>
        </span>
        @endif
    </div>
