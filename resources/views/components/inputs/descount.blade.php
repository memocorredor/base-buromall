<label for="field-form-descount">
    @lang('web_layout.local_descount')
</label>
<div class="form-group">
    <input id="field-form-descount" name="descount" type="text" value="{{ old('descount', $descount ?? '0.00') }}"
        class="form-control only_numbers {{ $errors->has('descount') ? ' is-invalid' : '' }}" {{ $status_input }} autocomplete="off">
    @if ( $errors->has('descount'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('descount') }}</strong>
    </span>
    @endif
</div>
