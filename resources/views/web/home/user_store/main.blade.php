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
<div class="layout-content-store">
    <div class="container-fluid">
        @if ($data_user_store)
        <div class="row">
            @php
            $locale_description = 'description_' . str_replace('_', '-', app()->getLocale());
            @endphp
            @foreach ($data_user_store as $row_user_store)
            @if ($row_user_store->enable === 1)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-cover" style="background-image: url( {{ $row_user_store->profile_background }} );">
                        <div class="circle-image"
                            style="background-image: url( {{ $row_user_store->image }} );"></div>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-6 d-flex justify-content-center">
                                <div class="align-items-center">
                                    <i class="icon-like fas fa-heart"></i>
                                    <span class="card-like">{{ $row_user_store->countLikesNumber() }}</span>
                                </div>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <div class="align-items-center">
                                    <i class="icon-views fas fa-eye"></i>
                                    <span class="card-views">{{ $row_user_store->countViewsNumber() }}</span>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">{{ $row_user_store->name }}</h5>
                        <div class="row">
                            <div class="col-4 m-0 p-0">
                                <div class="store-stats">
                                    <div class="stats">
                                        <div class="stats-number">
                                            <span>{{ $row_user_store->countBranchNumber() }}</span>
                                        </div>
                                        <div class="stats-title">
                                            <span>@lang('web_layout.local_branchs')</span>
                                        </div>
                                    </div>
                                    <div class="stats">
                                        <div class="stats-number">
                                            <span>{{ $row_user_store->countProductsNumber() }}</span>
                                        </div>
                                        <div class="stats-title">
                                            <span>@lang('web_layout.local_products')</span>
                                        </div>
                                    </div>
                                    <div class="stats">
                                        <div class="stats-number">
                                            <span>0</span>
                                        </div>
                                        <div class="stats-title">
                                            <span>@lang('web_layout.local_sales')</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-0 p-0">
                                <div class="store-info-item">
                                    <div class="store-data-item">
                                        <i class="far fa-envelope"></i>
                                        <span>{{ $row_user_store->email }}</span>
                                    </div>
                                    <div class="store-data-item">
                                        <i class="fas fa-phone-square"></i>
                                        <span>{{ $row_user_store->areacode . ' ' .  $row_user_store->phone}}</span>
                                    </div>
                                    <div class="store-data-item">
                                        <i class="fas fa-phone"></i>
                                        <span>{{ $row_user_store->areacode . ' ' .  $row_user_store->mobile}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text">{{ $row_user_store->$locale_description }}</p>
                    </div>
                    <a href="{{ route('profile.main_store', $row_user_store->url_name)}}"
                        class="bg-info card-footer align-middle">
                        <span class="btn-label-left">
                            <i class="fas fa-store-alt"></i>
                        </span>
                        <div class="btn-label-text">
                            <span>@lang('web_layout.local_visit_store')</span>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
