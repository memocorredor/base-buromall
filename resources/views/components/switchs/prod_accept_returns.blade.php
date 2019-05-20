<legend>
    <i class="fas fa-thumbs-up position-left"></i>
    @lang('app_fields.local_accept_returns')
</legend>
<div class="row">
    <div class="input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-accept-returns" type="checkbox" data-on="@lang('app_fields.local_yes')"
                    data-off="@lang('app_fields.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ($accept_returns === 1) ? 'checked' : '' }} {{ $status_input }}>
            </label>
            <input type="hidden" name="accept_returns" value="{{ ($accept_returns === 1) ? '1' : '0' }}"
                id="switch-form-accept-returns" />
        </div>
    </div>
</div>
