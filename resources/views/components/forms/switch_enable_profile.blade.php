<legend>
    <i class="fas fa-toggle-on position-left"></i>
    @lang('web_layout.local_legen_show_registro_public')
</legend>
<div class="row">
    <div class="input-group col-md-6 offset-md-8">
        <div class="checkbox">
            <label>
                <input id="toggle-event-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ($enable === 1) ? 'checked' : '' }} {{ $status_input }}>
            </label>
            <input type="hidden" name="enable" value="{{ ($enable === 1) ? '1' : '0' }}" id="switch-form-enable" />
        </div>
    </div>
</div>
