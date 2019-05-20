<label for="field-form-categories-id">
    @lang('web_layout.local_cbo_categories')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-th-list"></i>
            </div>
        </div>
        <select id="field-form-categories-id" name="categories_id"
            class="form-control border selectpicker {{ $errors->has('categories_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_categories = old('categories_id', $categories_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_categories_id as $row_categories_id)
            @if ($row_categories_id->enable === 1)
            <option value="{{ $row_categories_id->id }}" @if($res_categories===$row_categories_id-> id) selected @endif>
                {{ $row_categories_id->$local_name }}
            </option>
            @endif
            @endforeach
        </select>
        @if ( $errors->has('categories_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('categories_id') }}</strong>
        </span>
        @endif
    </div>
</div>
