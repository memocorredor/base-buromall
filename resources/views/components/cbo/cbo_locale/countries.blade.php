<label for="field-form-country-id">
    @lang('web_layout.local_cbo_country')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-globe-americas"></i>
            </div>
        </div>
        <select id="field-form-country-id" name="country_id"
            class="form-control border selectpicker {{ $errors->has('country_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_contry = old('country_id', $country_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_country_id as $row_country_id)
            <option value="{{ $row_country_id->id }}" @if($res_contry===$row_country_id-> id) selected @endif>
                {{ $row_country_id->name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('country_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('country_id') }}</strong>
        </span>
        @endif
    </div>
</div>
