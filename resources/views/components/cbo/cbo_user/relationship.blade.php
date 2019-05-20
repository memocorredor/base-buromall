<label for="field-form-relationship-id">
    @lang('web_layout.local_cbo_relationship')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-ring"></i>
            </div>
        </div>
        <select id="field-form-relationship-id" name="relationship_id"
            class="form-control border selectpicker {{ $errors->has('relationship_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_relationship = old('relationship_id', $relationship_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_relationship_id as $row_relationship_id)
            <option value="{{ $row_relationship_id->id }}" @if($res_relationship===$row_relationship_id-> id) selected @endif>
                {{ $row_relationship_id->$local_name}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('relationship_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('relationship_id') }}</strong>
        </span>
        @endif
    </div>
</div>
