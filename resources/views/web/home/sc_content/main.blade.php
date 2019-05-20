@extends("layouts.app")
@section("content")
<div class="layout-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="layout-content-header d-flex flex-row align-items-end my-flex-container"
                    style="background-image: url( {{ URL::asset($url_img_view)}} )">
                    <div class="layout-content-header-title my-flex-item"><i class="d-inline-block {{ $icon }}"></i>
                        <h1 class="d-inline-block">{{ $title_view }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-content-base">
            <div class="row">
                <div class="col-12 col-md-9 px-0">
                    <section class="layout-content-main  css-cajon">
                        <div class="layout-content-date">
                            <i class="d-inline-block fas fa-calendar-day"></i>
                            <span
                                class="d-inline-block"><strong>@lang('web_layout.local_content_date_create'):</strong>{{ $date_view }}</span>
                        </div>
                        <div class="layout-content-txt">
                            <article>
                                {!! html_entity_decode($text_view) !!}
                            </article>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-3 px-0">
                    <aside class="layout-content-aside css-cajon">

                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

