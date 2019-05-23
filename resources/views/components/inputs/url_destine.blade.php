<div class="row">
    <div class="col-md-12">
        <label for="field-form-url-destine">
            @lang('web_layout.local_url_destine')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-link"></i>
                </span>
            </div>
            <input id="field-form-url-destine" name="url_destine" type="text"
                value="{{ old('url_destine', $url_destine ?? '') }}" placeholder="https://example.com/..."
                class="form-control {{ $errors->has('url_destine') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">
            @if ( $errors->has('url_destine'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('url_destine') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
