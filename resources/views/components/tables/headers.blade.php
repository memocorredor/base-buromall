<div class="panel-title">
    <div class="float-left app-panel-icon">
        <i class="{{ $view_icon }}"></i>
    </div>
    <div class="float-left app-panel-title">
        <h4 class="title-content-group">
            {{ $seo_title }}
            <br>
            <small class="display-block">
                {{ $seo_description }}
            </small>
        </h4>
    </div>
</div>
<div class="heading-elements">
    <div class="app-button">
        <a href="{{ route($form_new) }}" class="btn btn-labeled btn-success" style="width: 100%">
            <span class="btn-label-right">
                <i class="fas fa-plus-square"></i>
            </span>
            <div class="btn-label-text"><span>@lang('web_layout.local_new_item')</span></div>
        </a>
    </div>
</div>
