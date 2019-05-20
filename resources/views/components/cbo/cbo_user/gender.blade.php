<label for="field-form-gender-id">
    @lang('web_layout.local_cbo_gender')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-venus-mars"></i>
            </div>
        </div>
        <select id="field-form-gender-id" name="gender_id"
            class="form-control border selectpicker {{ $errors->has('gender_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_gender = old('gender_id', $gender_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_gender_id as $row_gender_id)
            <option value="{{ $row_gender_id->id }}" @if($res_gender===$row_gender_id-> id) selected @endif>
                {{ $row_gender_id->$local_name}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('gender_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('gender_id') }}</strong>
        </span>
        @endif
    </div>
</div>
