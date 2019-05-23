<label for="field-form-increase-bid">
    @lang('web_layout.local_increase_bid')
</label>
<div class="form-group">
    <input id="field-form-increase-bid" name="increase_bid" type="text"
        value="{{ old('increase_bid', $increase_bid ?? '0.00') }}"
        class="form-control only_numbers_decimal {{ $errors->has('increase_bid') ? ' is-invalid' : '' }}" {{ $status_input }}
        autocomplete="off">
    @if ( $errors->has('increase_bid'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('increase_bid') }}</strong>
    </span>
    @endif
</div>
