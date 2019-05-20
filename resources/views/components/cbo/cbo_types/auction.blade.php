<label for="field-form-type-auction-id">
    @lang('web_layout.local_cbo_type_auction')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-gavel"></i>
            </div>
        </div>
        <select id="field-form-type-auction-id" name="type_auction_id"
            class="form-control border selectpicker {{ $errors->has('type_auction_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $local_name = 'name_' .$meta_lang;
            $res_type_auction = old('type_auction_id', $type_auction_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_type_auction_id as $row_type_auction_id)
            <option value="{{ $row_type_auction_id->id }}" @if($res_type_auction===$row_type_auction_id-> id) selected @endif>
                {{ $row_type_auction_id->$local_name }}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('type_auction_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('type_auction_id') }}</strong>
        </span>
        @endif
    </div>
</div>
