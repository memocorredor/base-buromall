<label for="field-form-type-event-id">
    @lang('web_layout.local_cbo_type_event')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-theater-masks"></i>
            </div>
        </div>
        <select id="field-form-type-event-id" name="type_event_id"
            class="form-control border selectpicker {{ $errors->has('type_event_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_type_event = old('type_event_id', $type_event_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_type_event_id as $row_type_event_id)
            <option value="{{ $row_type_event_id->id }}" @if($res_type_event===$row_type_event_id-> id) selected @endif>
                    {{ $row_type_event_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('type_event_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('type_event_id') }}</strong>
        </span>
        @endif
    </div>
</div>
