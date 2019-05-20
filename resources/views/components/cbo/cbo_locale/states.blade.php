<label for="field-form-state-id">
    @lang('web_layout.local_cbo_state')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-map-marked-alt"></i>
            </div>
        </div>
        <select id="field-form-state-id" name="state_id"
            class="form-control border selectpicker {{ $errors->has('state_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_state = old('state_id', $state_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_state_id as $row_state_id)
            <option value="{{ $row_state_id->id }}" @if($res_state===$row_state_id-> id) selected @endif>
                {{ $row_state_id->name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('state_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('state_id') }}</strong>
        </span>
        @endif
    </div>
</div>
