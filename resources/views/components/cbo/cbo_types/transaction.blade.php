<label for="field-form-type-transaction-id">
    @lang('web_layout.local_cbo_type_transaction')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-exchange-alt"></i>
            </div>
        </div>
        <select id="field-form-type-transaction-id" name="type_transaction_id"
            class="form-control border selectpicker {{ $errors->has('type_transaction_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_type_transaction = old('type_transaction_id', $type_transaction_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_type_transaction_id as $row_type_transaction_id)
            <option value="{{ $row_type_transaction_id->id }}" @if($res_type_transaction===$row_type_transaction_id-> id) selected @endif>
                    {{ $row_type_transaction_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('type_transaction_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('type_transaction_id') }}</strong>
        </span>
        @endif
    </div>
</div>
