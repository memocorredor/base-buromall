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
<div class="layout-content-price">
    <div class="container-fluid">
        @if ($data_user_plan)
        @php
        $locale_name = 'name_' . str_replace('_', '-', app()->getLocale());
        $locale_description = 'description_' . str_replace('_', '-', app()->getLocale());
        @endphp
        <div class="row">
            @foreach ($data_user_plan as $row_user_plan)
            @if ($row_user_plan->enable === 1)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="plan-card plan-one">
                    <div class="pricing-header @if($row_user_plan->highlight === 1) highlight @endif">
                        <h4 class="plan-title">{{ $row_user_plan->$locale_name }}</h4>
                        <div class="plan-cost">${{ $row_user_plan->price }}</div>
                    </div>
                    <ul class="plan-features">
                        <li>
                            <p>{{ $row_user_plan->$locale_description }}</p>
                        </li>
                        <li>
                            <i class="fas fa-store-alt"></i>
                            <span>@lang('web_layout.local_nu_stores')</span>
                            <span class="item-value">{{ $row_user_plan->nu_stores }}</span>
                        </li>
                        <li>
                            <i class="fas fa-store"></i>
                            <span>@lang('web_layout.local_nu_branch')</span>
                            <span class="item-value">{{ $row_user_plan->nu_branch }}</span>
                        </li>
                        <li>
                            <i class="fas fa-user-clock"></i>
                            <span>@lang('web_layout.local_nu_employes')</span>
                            <span class="item-value">{{ $row_user_plan->nu_employes }}</span>
                        </li>
                        <li>
                            <i class="fas fa-gift"></i>
                            <span>@lang('web_layout.local_nu_products')</span>
                            <span class="item-value">{{ $row_user_plan->nu_products }}</span>
                        </li>
                        <li><i class="fas fa-share-alt"></i><span>@lang('web_layout.local_nu_smedia')</span><span
                                class="item-value">{{ $row_user_plan->nu_smedia }}</span></li>
                        <li>
                            <i class="fas fa-map-marked-alt"></i>
                            <span>@lang('web_layout.local_nu_geolocation')</span>
                            <span class="item-value">{{ $row_user_plan->nu_geolocation }}</span>
                        </li>
                        <li>
                            <i class="fas fa-images"></i>
                            <span>@lang('web_layout.local_nu_banners')</span>
                            <span class="item-value">{{ $row_user_plan->nu_banners }}</span>
                        </li>
                        <li>
                            <i class="fas fa-gavel"></i>
                            <span>@lang('web_layout.local_nu_auction')</span>
                            <span class="item-value">{{ $row_user_plan->nu_auction }}</span>
                        </li>
                        <li>
                            <i class="fas fa-calendar-minus"></i>
                            <span>@lang('web_layout.local_nu_days_recu')</span>
                            <span class="item-value">{{ $row_user_plan->nu_days_recu }}</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span>@lang('web_layout.locale_ilimit_events')</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span>@lang('web_layout.locale_ilimit_cupons')</span>
                        </li>
                    </ul>
                    <div class="plan-footer">
                        <div class="app-button">
                            <button class="btn btn-labeled btn-secondary" style="width: 100%">
                                <span class="btn-label-left"><i class="fas fa-plus-circle"></i></span>
                                <div class="btn-label-text"><span>@lang('web_layout.locale_btn_plan_buy')</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
