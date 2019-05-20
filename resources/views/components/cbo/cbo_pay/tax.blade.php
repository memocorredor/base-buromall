<label for="field-form-type-transaction-id">
        @lang('web_layout.local_cbo_tax')
    </label>
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-receipt"></i>
                </div>
            </div>
            <select id="field-form-type-transaction-id" name="tax_id"
                class="form-control border selectpicker {{ $errors->has('tax_id') ? ' is-invalid' : '' }}"
                data-live-search="true" data-size="10" {{ $status_input }}>
                @php
                $res_pay_tax = old('tax_id', $tax_id ?? '0')
                @endphp
                <option value="0">@lang('web_layout.local_select')</option>
                @foreach ($data_pay_tax_id as $row_pay_tax_id)
                <option value="{{ $row_pay_tax_id->id }}" @if($res_pay_tax===$row_pay_tax_id-> id) selected @endif>
                        {{ $row_pay_tax_id->name }}
                </option>
                @endforeach
            </select>
            @if ( $errors->has('tax_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tax_id') }}</strong>
            </span>
            @endif
        </div>
    </div>
