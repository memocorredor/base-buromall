<legend>
    <i class="fas fa-directions position-left"></i>@lang('web_layout.local_legen_records')
</legend>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-id">
            @lang('web_layout.local_id')
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-file-import"></i>
                </span>
            </div>
            <input id="field-form-id" name="id" type="text" value="{{ old('id', $id ?? '') }}"
                placeholder="@lang('web_layout.local_id_ph')" class="form-control text-right" disabled>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-action">
            @lang('web_layout.local_form_action')
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-hdd"></i>
                </span>
            </div>
            <input id="field-form-action" name="form_action" type="text"
                value="{{ old('form_action', $form_action ?? '') }}"
                placeholder="@lang('web_layout.local_form_action_ph')" class="form-control text-right" disabled>
        </div>
    </div>
</div>
