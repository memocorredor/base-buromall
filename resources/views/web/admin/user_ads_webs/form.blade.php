@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.forms.headers')
        </div>
        <div class="card-body">
            <form role="form" action="{{ route($route_form, $id) }}" method="post">
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
                                @include('components.in_date.txt_date_campain_end')
                            </div>
                            @include('components.inputs.url_destine')
                            <div class="row">
                                <div class="col-md-12">
                                    @include('components.inputs.name')
                                </div>
                            </div>
                            <div class="tabbable">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @include('components.forms.tabs_flags')
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-locale-es"
                                        aria-labelledby="nav-locale-es-tab" role="tabpanel">
                                        @include('components.inputs.smn_code_es')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-pt"
                                        aria-labelledby="nav-locale-pt-tab" role="tabpanel">
                                        @include('components.inputs.smn_code_pt')
                                    </div>
                                    <div class="tab-pane fade show" id="nav-locale-en"
                                        aria-labelledby="nav-locale-en-tab" role="tabpanel">
                                        @include('components.inputs.smn_code_en')
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
