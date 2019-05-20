<label for="field-form-web-id">
    @lang('web_layout.local_cbo_web')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-satellite"></i>
            </div>
        </div>
        <select id="field-form-web-id" name="web_id"
            class="form-control border selectpicker {{ $errors->has('web_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_website = old('web_id', $web_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_web_id as $row_web_id)
            <option value="{{ $row_web_id->id }}" @if($res_website===$row_web_id-> id) selected @endif>
                {{ $row_web_id->name_page }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('web_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('web_id') }}</strong>
        </span>
        @endif
    </div>
</div>
