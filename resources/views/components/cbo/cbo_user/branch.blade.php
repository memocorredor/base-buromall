<label for="field-form-branch-id">
    @lang('web_layout.local_cbo_branch')
</label>
<div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-store"></i>
            </div>
        </div>
        <select id="field-form-branch-id" name="branch_id"
            class="form-control border selectpicker {{ $errors->has('branch_id') ? ' is-invalid' : '' }}"
            data-live-search="true" data-size="10" {{ $status_input }}>
            @php
            $res_branch = old('branch_id', $branch_id ?? '0')
            @endphp
            <option value="0">@lang('web_layout.local_select')</option>
            @foreach ($data_user_store_branch_id as $row_branch_id)
            <option value="{{ $row_branch_id->id }}" @if($res_branch===$row_branch_id-> id) selected @endif>
                {{ $row_branch_id->name .' '. $row_branch_id->lastname}}
            </option>
            @endforeach
        </select>
        @if ( $errors->has('branch_id'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('branch_id') }}</strong>
        </span>
        @endif
    </div>
</div>
