<label for="field-form-city-id">
    @lang('web_layout.local_cbo_city')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-map"></i>
            </div>
        </div>
        <select id="field-form-city-id" name="city_id"
            class="form-control border selectpicker {{ $errors->has('city_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_city = old('city_id', $city_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_city_id as $row_city_id)
            <option value="{{ $row_city_id->id }}" @if($res_city===$row_city_id-> id) selected @endif>
                {{ $row_city_id->name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('city_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('city_id') }}</strong>
        </span>
        @endif
    </div>
</div>
