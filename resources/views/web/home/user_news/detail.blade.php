@extends('layouts.app')
@section('content')
<div class="layout-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="layout-content-header-title my-flex-item"><i class="d-inline-block {{ $icon }}"></i>
                    <h1 class="d-inline-block">{{ $title_view }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-content-item-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-9 px-0">
                @include('components.home.item_img')
            </div>
            <div class="col-xs-12 col-md-3 px-0">
                @include('components.home.item_qr')
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-9 px-2">
                    <div class="row">
                            <div class="col-md-6 grilla-item">
                                <i class="fas fa-calendar"></i><label>@lang('web_layout.local_created_at'):</label>
                                <div class="data-dt-value">
                                    <span>{{ $date_created }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 grilla-item">
                                <i class="fas fa-id-card-alt"></i><label>@lang('web_layout.local_name_publiched'):</label>
                                <div class="data-dt-value">
                                    <span>{{ $publiced_by }}</span>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-md-12 grilla-item">
                        <div class="tabbable">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                    <a class="nav-item nav-link active" id="nav-item-text-tab" href="#nav-item-text"
                                        aria-controls="nav-item-text" data-toggle="tab" role="tab" aria-selected="true">
                                        <i class="fas fa-file-signature"></i>@lang('web_layout.local_description')
                                    </a>

                                    <a class="nav-item nav-link" id="nav-item-comment-tab" href="#nav-item-comment"
                                        aria-controls="nav-item-comment" data-toggle="tab" role="tab"
                                        aria-selected="false">
                                        <i class="fas fa-comments"></i>@lang('web_layout.local_comments')
                                    </a>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav-item-text"
                                    aria-labelledby="nav-item-text-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col">
                                            <article style="text-align: justify;">
                                                {!! html_entity_decode($text_view) !!}
                                            </article>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="nav-item-comment"
                                    aria-labelledby="nav-item-comment-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col">
                                            @include('components.home.item_comments')
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grilla-item">
                        <i class="fas fa-person-booth"></i><label>@lang('web_layout.local_catalog'):</label>
                        <div class="data-dt-value">
                            <span class="saler-name-catalog-item">
                                <i class="fas fa-tag"></i>{{ $departaments }}
                            </span>
                            @if($categories)
                            <span class="saler-name-catalog-item">
                                <i class="fas fa-tags"></i>{{ $categories }}
                            </span>
                            @endif
                            @if($categories_sub)
                            <span class="saler-name-catalog-item">
                                <i class="fas fa-user-tag"></i>{{ $categories_sub }}
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grilla-item">
                        <i class="fas fa-glasses"></i><label>@lang('web_layout.local_keywords'):</label>
                        <div class="data-dt-value">
                            <span>{{ $keywords_view }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 px-0">
                @include('components.home.item_ads')
            </div>
        </div>
    </div>
</div>
@endsection
