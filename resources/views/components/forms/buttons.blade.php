@if ($action_form == 'show')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="app-button">
                <a href="{{ route($form_view) }}" class="btn btn-labeled btn-warning" style="width: 100%">
                    <span class="btn-label-right">
                        <i class="fas fa-arrow-circle-left"></i>
                    </span>
                    <div class="btn-label-text">
                        <span>@lang('web_layout.local_back')</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endif
@if ($action_form == 'add' || $action_form == 'edit')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="app-button">
                <button type="submit" class="btn btn-labeled btn-success" style="width: 100%">
                    <span class="btn-label-right">
                        <i class="fas fa-save"></i>
                    </span>
                    <div class="btn-label-text">
                        <span>@lang('web_layout.local_save_info')</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="app-button">
                <a href="{{ route($form_view) }}" class="btn btn-labeled btn-danger" style="width: 100%">
                    <span class="btn-label-right">
                        <i class="fas fa-times-circle"></i>
                    </span>
                    <div class="btn-label-text">
                        <span>@lang('web_layout.local_cancel')</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endif
<input type="hidden" id="base_id" name="base_id" value="{{  $id }}">
<input type="hidden" id="view_redi_view" name="view_redi_view" value="{{ route($form_view) }}">
<input type="hidden" name="process" value="{{ $action_form }}" />
