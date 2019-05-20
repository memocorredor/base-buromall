<label for="field-form-type-store-id">
    @lang('web_layout.local_cbo_type_store')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-store"></i>
            </div>
        </div>
        <select id="field-form-type-store-id" name="type_store_id"
            class="form-control border selectpicker {{ $errors->has('type_store_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_type_store = old('type_store_id', $type_store_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_type_store_id as $row_type_store_id)
            <option value="{{ $row_type_store_id->id }}" @if($res_type_store===$row_type_store_id-> id) selected @endif>
                    {{ $row_type_store_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('type_store_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('type_store_id') }}</strong>
        </span>
        @endif
    </div>
</div>
