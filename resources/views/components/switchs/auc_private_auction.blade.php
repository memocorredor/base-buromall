<legend>
    <i class="fas fa-user-secret position-left"></i>
    @lang('web_layout.local_private_auction')
</legend>
<div class="row">
    <div class="input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-private-auction" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ($private_auction === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input type="hidden" name="private_auction" value="{{ ($private_auction === 1) ? '1' : '0' }}"
                id="switch-form-private-auction" />
        </div>
    </div>
</div>
