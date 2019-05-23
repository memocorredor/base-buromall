<legend>
    <i class="fas fa-thumbs-up position-left"></i>
    @lang('web_layout.local_buyitnow')
</legend>
<div class="row">
    <div class="input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-buyitnow" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ($buyitnow === 1) ? 'checked' : '' }} {{ $status_input }}>
            </label>
            <input type="hidden" name="buyitnow" value="{{ ($buyitnow === 1) ? '1' : '0' }}"
                id="switch-form-buyitnow" />
        </div>
    </div>
</div>
