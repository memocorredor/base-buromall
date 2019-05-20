<label for="field-form-name">
    @lang('web_layout.local_name')
</label>
<div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="{{ $view_icon }}"></i>
        </span>
    </div>
    <input id="field-form-name" name="name" type="text" value="{{ old('name', $name ?? '') }}"
        placeholder="@lang('web_layout.local_name_ph')"
        class="form-control letters_first {{ $errors->has('name') ? ' is-invalid' : '' }}" {{ $status_input }}
        autocomplete="off">
    @if ( $errors->has('name'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>
