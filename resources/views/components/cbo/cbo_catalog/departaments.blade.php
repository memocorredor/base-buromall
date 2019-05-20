<label for="field-form-departaments-id">
    @lang('web_layout.local_cbo_departaments')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-th-large"></i>
            </div>
        </div>
        <select id="field-form-departaments-id" name="departaments_id"
            class="form-control border selectpicker {{ $errors->has('departaments_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_departaments = old('departaments_id', $departaments_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_departaments_id as $row_departaments_id)
            @if ($row_departaments_id->enable === 1)
            <option value="{{ $row_departaments_id->id }}" @if($res_departaments===$row_departaments_id-> id) selected @endif>
                {{ $row_departaments_id->$local_name }}
            </option>
            @endif
            @endforeach
        </select>
        @if ( $errors->has('departaments_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('departaments_id') }}</strong>
        </span>
        @endif
    </div>
</div>
