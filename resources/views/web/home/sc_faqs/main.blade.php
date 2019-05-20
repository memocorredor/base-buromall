@extends("layouts.app")
@section("content")
<div class="layout-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div class="layout-content-header-title my-flex-item"><i class="d-inline-block {{ $icon }}"></i>
                    <h1 class="d-inline-block">{{ $title_view }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col px-0">
                <section class="layout-content-main">
                    @if ($data_categories_faqs)
                    <div class="layout-content-faqs">
                        <aside class="sidebar" data-js="sidebar">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab-faqs" role="tablist">
                                    @php
                                    $count_faq_a = 1;
                                    $locale_name = 'name_' . str_replace('_', '-', app()->getLocale());
                                    @endphp
                                    @foreach ($data_categories_faqs as $row_categories_faqs)
                                    @if ($row_categories_faqs->enable === 1)
                                    <a class="nav-item nav-link @if($count_faq_a === 1) active @endif "
                                        id="nav-{{ $row_categories_faqs->id }}-tab"
                                        href="#nav-{{ $row_categories_faqs->id }}"
                                        aria-controls="nav-{{ $row_categories_faqs->id }}" data-toggle="tab" role="tab"
                                        aria-selected="true">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                        <span class="sidebar-span">{{ $row_categories_faqs->$locale_name }}</span>
                                    </a>
                                    @php
                                    $count_faq_a ++;
                                    @endphp
                                    @endif
                                    @endforeach
                                </div>
                            </nav>
                        </aside>
                        <div class="main" data-js="main">
                            <div class="app-button">
                                <button data-js="open-sidebar" class="btn btn-labeled btn-secondary" style="width: 100%">
                                    <span class="btn-label-left"><i class="fas fa-clipboard-list"></i></span>
                                    <div class="btn-label-text"><span>@lang('web_layout.local_look_faq_categorie')</span>
                                    </div>
                                </button>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                @php
                                $count_faq_b = 1;
                                $locale_name = 'name_' . str_replace('_', '-', app()->getLocale());
                                @endphp
                                @foreach ($data_categories_faqs as $row_categories_faqs_ac)
                                @if ($row_categories_faqs_ac->enable === 1)
                                <div class="tab-pane fade show @if($count_faq_b === 1) active @endif "
                                    id="nav-{{ $row_categories_faqs_ac->id }}"
                                    aria-labelledby="nav-{{ $row_categories_faqs_ac->id }}-tab" role="tabpanel">
                                    @php
                                    $count_faq_b ++;
                                    $data_view = Buromall\Models\ScFaq::where('categories_faq_id',
                                    $row_categories_faqs_ac->id)->get();
                                    $count_faq_c = 1;
                                    $locale_title = 'title_' . str_replace('_', '-', app()->getLocale());
                                    $locale_text = 'text_' . str_replace('_', '-', app()->getLocale());
                                    @endphp
                                    @if ($data_view)
                                    <div id="accordion" class="accordion">
                                        <div class="card mb-0">
                                            @foreach ($data_view as $row_faqs)
                                            @if ($row_faqs->enable === 1)
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                href="#collapse{{ $row_categories_faqs_ac->id . '-' . $row_faqs->id }}">
                                                <a class="card-title">
                                                    {{ $row_faqs->$locale_title }}
                                                </a>
                                            </div>
                                            <div id="collapse{{ $row_categories_faqs_ac->id . '-' . $row_faqs->id }}"
                                                class="card-body collapse" data-parent="#accordion">
                                                <p>{{ $row_faqs->$locale_text }}</p>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
