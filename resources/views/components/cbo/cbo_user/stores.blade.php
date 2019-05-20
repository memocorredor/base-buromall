<label for="field-form-store-id">
    @lang('web_layout.local_cbo_store')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-store-alt"></i>
            </div>
        </div>
        <select id="field-form-store-id" name="store_id"
            class="form-control border selectpicker {{ $errors->has('store_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_store = old('store_id', $store_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_user_store_id as $row_store_id)
            <option value="{{ $row_store_id->id }}" @if($res_store===$row_store_id-> id) selected @endif>
                {{ $row_store_id->name .' '. $row_store_id->lastname}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('store_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('store_id') }}</strong>
        </span>
        @endif
    </div>
</div>
