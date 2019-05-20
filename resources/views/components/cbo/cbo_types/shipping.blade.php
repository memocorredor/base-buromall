<label for="field-form-type-shipping-id">
    @lang('web_layout.local_cbo_type_shipping')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-luggage-cart"></i>
            </div>
        </div>
        <select id="field-form-type-shipping-id" name="type_shipping_id"
            class="form-control border selectpicker {{ $errors->has('type_shipping_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_type_shipping = old('type_shipping_id', $type_shipping_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_type_shipping_id as $row_type_shipping_id)
            <option value="{{ $row_type_shipping_id->id }}" @if($res_type_shipping===$row_type_shipping_id-> id)
                selected @endif>
                {{ $row_type_shipping_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('type_shipping_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('type_shipping_id') }}</strong>
        </span>
        @endif
    </div>
</div>
