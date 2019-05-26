<label for="field-form-type-identification-id">
    @lang('web_layout.local_cbo_type_identification')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-search-location"></i>
            </div>
        </div>
        <select id="field-form-type-identification-id" name="type_identification_id"
            class="form-control border selectpicker {{ $errors->has('type_identification_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_type_identification = old('type_identification_id', $type_identification_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_type_identification_id as $row_type_identification_id)
            <option value="{{ $row_type_identification_id->id }}" @if($res_type_identification===$row_type_identification_id-> id) selected @endif>
                {{ $row_type_identification_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('type_identification_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('type_identification_id') }}</strong>
        </span>
        @endif
    </div>
</div>
