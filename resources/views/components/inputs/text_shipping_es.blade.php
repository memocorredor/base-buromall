<div class="row">
    <div class="col-md-12">
        <label for="field-form-shipping-description-es">@lang('web_layout.local_text')
            <span class="lang-label">
                @lang('web_layout.local_lang_es_label')
            </span>
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-alt"></i>
                </span>
            </div>
            <textarea id="field-form-shipping-description-es" name="shipping_description_es" placeholder="@lang('app_fields.local_shipping_description_ph')"
                class="form-control {{ $errors->has('shipping_description_es') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">{{ old('shipping_description_es', $shipping_description_es ?? '') }}</textarea>
            @if ( $errors->has('shipping_description_es'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('shipping_description_es') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
