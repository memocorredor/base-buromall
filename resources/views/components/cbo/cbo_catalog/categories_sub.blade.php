<label for="field-form-categories_sub-id">
        @lang('web_layout.local_cbo_categories_sub')
    </label>
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-list"></i>
                </div>
            </div>
            <select id="field-form-categories_sub-id" name="categories_sub_id"
                class="form-control border selectpicker {{ $errors->has('categories_sub_id') ? ' is-invalid' : '' }}"
                data-live-search="true" data-size="10" {{ $status_input }}>
                @php
                $local_name = 'name_' .$meta_lang;
                $res_categories_sub = old('categories_sub_id', $categories_sub_id ?? '0')
                @endphp
                <option value="0">@lang('web_layout.local_select')</option>
                @foreach ($data_categories_sub_id as $row_categories_sub_id)
                @if ($row_categories_sub_id->enable === 1)
                <option value="{{ $row_categories_sub_id->id }}" @if($res_categories_sub===$row_categories_sub_id-> id) selected @endif>
                    {{ $row_categories_sub_id->$local_name }}
                </option>
                @endif
                @endforeach
            </select>
            @if ( $errors->has('categories_sub_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('categories_sub_id') }}</strong>
            </span>
            @endif
        </div>
    </div>
