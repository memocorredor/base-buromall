<label for="field-form-quantity">
    @lang('app_fields.local_quantity')
</label>
<div class="form-group">
    <input id="field-form-quantity" name="quantity" type="text" value="{{ old('quantity', $quantity ?? '0') }}"
        class="form-control only_numbers {{ $errors->has('quantity') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('quantity'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('quantity') }}</strong>
    </span>
    @endif
</div>
