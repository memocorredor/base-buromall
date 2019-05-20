<label for="field-form-plan-id">
    @lang('web_layout.local_cbo_plan')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-shoe-prints"></i>
            </div>
        </div>
        <select id="field-form-plan-id" name="plan_id"
            class="form-control border selectpicker {{ $errors->has('plan_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_plan = old('plan_id', $plan_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_plan_id as $row_plan_id)
            <option value="{{ $row_plan_id->id }}" @if($res_plan===$row_plan_id-> id) selected @endif>
                {{ $row_plan_id->$local_name}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('plan_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('plan_id') }}</strong>
        </span>
        @endif
    </div>
</div>
