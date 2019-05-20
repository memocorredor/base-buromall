<legend>
    <i class="fas fa-thumbs-up position-left"></i>
    @lang('app_fields.local_enable_deals')
</legend>
<div class="row">
    <div class="input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-enable-deals" type="checkbox" data-on="@lang('app_fields.local_yes')"
                    data-off="@lang('app_fields.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ($enable_deals === 1) ? 'checked' : '' }} {{ $status_input }}>
            </label>
            <input type="hidden" name="enable_deals" value="{{ ($enable_deals === 1) ? '1' : '0' }}"
                id="switch-form-enable-deals" />
        </div>
    </div>
</div>
