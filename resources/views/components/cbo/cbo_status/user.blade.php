<label for="field-form-status-user-id">
    @lang('web_layout.local_cbo_status_user')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-user-md"></i>
            </div>
        </div>
        <select id="field-form-status-user-id" name="status_user_id"
            class="form-control border selectpicker {{ $errors->has('status_user_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_status_user = old('status_user_id', $status_user_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_status_user_id as $row_status_user_id)
            <option value="{{ $row_status_user_id->id }}" @if($res_status_user===$row_status_user_id-> id) selected @endif>
                {{ $row_status_user_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('status_user_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('status_user_id') }}</strong>
        </span>
        @endif
    </div>
</div>
