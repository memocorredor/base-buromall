<legend>
    <i class="fas fa-calendar-day position-left"></i>@lang('web_layout.local_legen_dates')
</legend>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-created-at">
            @lang('web_layout.local_created_at')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-calendar-plus"></i>
                </span>
            </div>
            <input id="field-form-created-at" name="created_at" type="text"
                value="{{ old('created_at', $created_at ?? '') }}" placeholder="@lang('web_layout.local_created_at_ph')"
                class="form-control text-right" disabled>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="field-form-updated-at">
            @lang('web_layout.local_updated_at')
        </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-calendar-check"></i>
                </span>
            </div>
            <input id="field-form-updated-at" name="updated_at" type="text"
                value="{{ old('updated_at', $updated_at ?? '') }}" placeholder="@lang('web_layout.local_updated_at_ph')"
                class="form-control text-right" disabled>
        </div>
    </div>
</div>
