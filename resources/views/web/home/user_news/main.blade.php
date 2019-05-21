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
<div class="layout-content-news">
    @if ($data_items)
    <div class="container-fluid">
        <div class="row">
            @php
            $url_title = 'url_title_' .$meta_lang;
            $name = 'name_' .$meta_lang;
            $title = 'title_' .$meta_lang;
            $description = 'description_' .$meta_lang;
            @endphp
            @foreach ($data_items as $row_items)
            @if ($row_items->enable === 1)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-header-title">
                            <i class="{{ $icon }}"></i>
                            <span>{{ $item_name_base }}</span>
                        </div>
                        <div class="card-header-date">
                            <i class="fas fa-calendar"></i>
                            <span>{{ $row_items->created_at }}</span>
                        </div>
                    </div>
                    <img class="card-img img-fluid" src="http://placehold.it/980x520" alt="Card image cap">
                    <div class="card-stats">
                        <div class="row no-gutters">
                            <div class="col-4 d-flex justify-content-center border-stat">
                                <div class="align-items-center">
                                    <i class="icon-like fas fa-heart"></i>
                                    <span class="card-like">{{ $row_items->countLikesNumber() }}</span>
                                </div>
                            </div>
                            <div class="col-4 d-flex justify-content-center border-stat">
                                <div class="align-items-center">
                                    <i class="icon-comment fas fa-comments"></i>
                                    <span class="card-comment">{{ $row_items->countCommentsNumber() }}</span>
                                </div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <div class="align-items-center">
                                    <i class="icon-views fas fa-eye"></i>
                                    <span class="card-views">{{ $row_items->countViewsNumber() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <h5 class="card-title">{{ $row_items->$title }}</h5>
                        <p class="card-text">{{ $row_items->$description }}</p>

                        <div class="card-info-bottom">
                            <div class="card-info-bottom-img">
                                <img class="img-fluid" src="http://placehold.it/150x150" alt="Card image cap">
                            </div>
                            <div class="card-info-bottom-publisher">
                                <div class="card-info-bottom-user">
                                    <span class="card-info-publisher">
                                        <i
                                            class="fas fa-user"></i>{{ $row_items->nameUser->name . ' '. $row_items->nameUser->lastname }}
                                    </span>
                                </div>
                                <div class="card-info-bottom-catalog">
                                    <span class="card-info-catalog">
                                        <i class="fas fa-tag"></i>{{ $row_items->nameDepartament->$name }}
                                    </span>
                                    <span class="card-info-catalog">
                                        <i class="fas fa-tags"></i>{{ $row_items->nameCategorie->$name }}
                                    </span>
                                    <span class="card-info-catalog">
                                        <i class="fas fa-user-tag"></i>{{ $row_items->nameSubCategorie->$name }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route($item_url_base, $row_items->$url_title) }}"
                        class="bg-info card-footer align-middle">
                        <span class="btn-label-left">
                            <i class="{{ $icon }}"></i>
                        </span>
                        <div class="btn-label-text">
                            <span>@lang('web_layout.local_visit_news')</span>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @else
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Noticias!</div>
                    <div class="card-body">
                        <h6 style="width: 100%; text-align: center;">Pronto tendremos noticias para ti!</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
