<label for="field-form-brand-id">
    @lang('web_layout.local_cbo_brand')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-ghost"></i>
            </div>
        </div>
        <select id="field-form-brand-id" name="brand_id"
            class="form-control border selectpicker {{ $errors->has('brand_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_brand = old('brand_id', $brand_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_cg_brand_id as $row_brand_id)
            <option value="{{ $row_brand_id->id }}" @if($res_brand===$row_brand_id-> id) selected @endif>
                {{ $row_brand_id->name .' '. $row_brand_id->lastname}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('brand_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('brand_id') }}</strong>
        </span>
        @endif
    </div>
</div>
