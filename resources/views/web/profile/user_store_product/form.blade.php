@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.forms.headers')
        </div>
        <div class="card-body">
            <form role="form" action="{{ route($route_form, $id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if($action_form === 'edit')
                <input type="hidden" name="_method" value="PUT">
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <fieldset class="text-semibold">
                            @include('components.forms.switch_enable')
                            @include('components.forms.action')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.cbo.cbo_user.user')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.cbo.cbo_locale.countries')
                                </div>
                            </div>
                            @include('components.forms.dates')
                            @include('components.forms.buttons')
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_user.stores')
                                </div>
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_user.branch')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_status.product')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    @include('components.cbo.cbo_catalog.departaments')
                                </div>
                                <div class="col-md-4">
                                    @include('components.cbo.cbo_catalog.categories')
                                </div>
                                <div class="col-md-4">
                                    @include('components.cbo.cbo_catalog.categories_sub')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_catalog.brand')
                                </div>
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_types.transaction')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-no-ref">
                                        @lang('web_layout.local_no_ref')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-no-ref" name="no_ref" type="text"
                                            value="{{ old('no_ref', $no_ref ?? '') }}"
                                            placeholder="@lang('web_layout.local_no_ref_ph')"
                                            class="form-control letters_first {{ $errors->has('no_ref') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('no_ref'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('no_ref') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-no-ean">
                                        @lang('web_layout.local_no_ean')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-no-ean" name="no_ean" type="text"
                                            value="{{ old('no_ean', $no_ean ?? '') }}"
                                            placeholder="@lang('web_layout.local_no_ean_ph')"
                                            class="form-control letters_first {{ $errors->has('no_ean') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('no_ean'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('no_ean') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tabbable">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @include('components.forms.tabs_flags')
                                        <a class="nav-item nav-link" id="nav-sale-tab" href="#nav-sale"
                                            aria-controls="nav-sale" data-toggle="tab" role="tab"
                                            aria-selected="false"><i class="fas fa-cash-register"></i>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-auction-tab" href="#nav-auction"
                                            aria-controls="nav-auction" data-toggle="tab" role="tab"
                                            aria-selected="false"><i class="fas fa-gavel"></i>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-shipping-tab" href="#nav-shipping"
                                            aria-controls="nav-shipping" data-toggle="tab" role="tab"
                                            aria-selected="false"><i class="fas fa-dolly"></i>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-img-tab" href="#nav-img"
                                            aria-controls="nav-img" data-toggle="tab" role="tab"
                                            aria-selected="false"><i class="fas fa-camera-retro"></i>
                                        </a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-locale-es"
                                        aria-labelledby="nav-locale-es-tab" role="tabpanel">
                                        @include('components.inputs.url_title_es')
                                        @include('components.inputs.title_es')
                                        @include('components.inputs.smn_text_es')
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        @include('components.inputs.url_title_pt')
                                        @include('components.inputs.title_pt')
                                        @include('components.inputs.smn_text_pt')
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        @include('components.inputs.url_title_en')
                                        @include('components.inputs.title_en')
                                        @include('components.inputs.smn_text_en')
                                        @include('components.forms.legend_seo')
                                        @include('components.inputs.des_key_en')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-sale" aria-labelledby="nav-sale-tab"
                                        role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.cbo.cbo_pay.tax')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                @include('components.inputs.price')
                                            </div>
                                            <div class="col-md-4">
                                                @include('components.inputs.descount')
                                            </div>
                                            <div class="col-md-4">
                                                @include('components.inputs.quantity')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                @include('components.switchs.prod_enable_deals')
                                            </div>
                                            <div class="col-md-4">
                                                @include('components.switchs.prod_re_enter')
                                            </div>
                                            <div class="col-md-4">
                                                @include('components.switchs.prod_accept_returns')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-auction" aria-labelledby="nav-auction-tab"
                                        role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.cbo.cbo_types.auction')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.inputs.auc_price_ini')
                                            </div>
                                            <div class="col-md-6">
                                                @include('components.inputs.auc_min_biders')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.inputs.auc_price_reserve')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.inputs.auc_increase_bid')
                                            </div>
                                            <div class="col-md-6">
                                                @include('components.inputs.auc_price_incrise')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.switchs.auc_private_auction')
                                            </div>
                                            <div class="col-md-6">
                                                @include('components.switchs.auc_buyitnow')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="nav-shipping" aria-labelledby="nav-shipping-tab"
                                        role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.cbo.cbo_types.shipping')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.inputs.ship_prod_weight')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                @include('components.inputs.ship_prod_long')
                                            </div>
                                            <div class="col-md-4">
                                                @include('components.inputs.ship_prod_width')
                                            </div>
                                            <div class="col-md-4">
                                                @include('components.inputs.ship_prod_high')
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @include('components.inputs.shipping_price')
                                            </div>
                                            <div class="col-md-6">
                                                @include('components.inputs.shipping_insurance')
                                            </div>
                                        </div>
                                        <div class="tabbable">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab-shipping" role="tablist">
                                                    @include('components.forms.tabs_flags_shipping')
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent-shipping">
                                                <div class="tab-pane fade show active" id="nav-locale-es-shipping"
                                                    aria-labelledby="nav-locale-es-shipping-tab" role="tabpanel">
                                                    @include('components.inputs.text_shipping_es')
                                                </div>
                                                <div class="tab-pane fade show" id="nav-locale-pt-shipping"
                                                    aria-labelledby="nav-locale-pt-shipping-tab" role="tabpanel">
                                                    @include('components.inputs.text_shipping_pt')
                                                </div>
                                                <div class="tab-pane fade show" id="nav-locale-en-shipping"
                                                    aria-labelledby="nav-locale-en-shipping-tab" role="tabpanel">
                                                    @include('components.inputs.text_shipping_en')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @include('components.forms.tabs_imagen')
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
            @include('components.forms.tabs_complements')
        </div>
    </div>
</div>
@endsection
