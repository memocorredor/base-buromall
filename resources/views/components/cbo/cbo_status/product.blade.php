<label for="field-form-status-product-id">
    @lang('web_layout.local_cbo_status_product')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-heartbeat"></i>
            </div>
        </div>
        <select id="field-form-status-product-id" name="status_product_id"
            class="form-control border selectpicker {{ $errors->has('status_product_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_status_product = old('status_product_id', $status_product_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_status_product_id as $row_status_product_id)
            <option value="{{ $row_status_product_id->id }}" @if($res_status_product===$row_status_product_id-> id) selected @endif>
                {{ $row_status_product_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('status_product_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('status_product_id') }}</strong>
        </span>
        @endif
    </div>
</div>
