<label for="field-form-categories_faq-id">
    @lang('web_layout.local_cbo_categories_faq')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-list"></i>
            </div>
        </div>
        <select id="field-form-categories_faq-id" name="categories_faq_id"
            class="form-control border selectpicker {{ $errors->has('categories_faq_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_categories_faq = old('categories_faq_id', $categories_faq_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_categories_faq_id as $row_categories_faq_id)
            <option value="{{ $row_categories_faq_id->id }}"
                @if($res_categories_faq===$row_categories_faq_id-> id) selected @endif>
                {{ $row_categories_faq_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('categories_faq_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('categories_faq_id') }}</strong>
        </span>
        @endif
    </div>
</div>
