@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.forms.headers')
        </div>
        <div class="card-body">
            <form role="form" action="{{ route($route_form, $id) }}" method="post"enctype="multipart/form-data">
                @include('components.forms.error')
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
                                    @include('components.cbo.cbo_types.transaction')
                                </div>
                                <div class="col-md-6">
                                    @include('components.cbo.cbo_status.product')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @include('components.inputs.price')
                                </div>
                                <div class="col-md-6">
                                    @include('components.inputs.quantity')
                                </div>
                            </div>
                            <div class="tabbable">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @include('components.forms.tabs_flags')
                                        <a class="nav-item nav-link" id="nav-geolocation-tab" href="#nav-geolocation"
                                            aria-controls="nav-geolocation" data-toggle="tab" role="tab"
                                            aria-selected="false"><i class="fas fa-map-marked-alt"></i>
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
                                    <div class="tab-pane fade show" id="nav-geolocation"
                                        aria-labelledby="nav-geolocation-tab" role="tabpanel">
                                        @include('components.inputs.geolocation')
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
