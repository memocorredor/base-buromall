<label for="field-form-user-id">
    @lang('web_layout.local_cbo_user')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-id-card-alt"></i>
            </div>
        </div>
        <select id="field-form-user-id" name="user_id"
            class="form-control border selectpicker {{ $errors->has('user_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_user = old('user_id', $user_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_user_id as $row_user_id)
            <option value="{{ $row_user_id->id }}" @if($res_user===$row_user_id-> id) selected @endif>
                {{ $row_user_id->name .' '. $row_user_id->lastname}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('user_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('user_id') }}</strong>
        </span>
        @endif
    </div>
</div>
