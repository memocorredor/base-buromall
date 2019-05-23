@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.tables.headers')
        </div>
        <div class="card-body px-0">
            <div class="table-responsive">
                <table class="display w-100 d-block d-md-table table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 20px;">@lang('web_layout.local_counter')</th>
                            <th class="text-center" style="width: 20px;">@lang('web_layout.local_id')</th>
                            <th class="text-center" style="width: 110px;">@lang('web_layout.local_tb_created_at')</th>
                            <th class="text-center" style="width: 110px;">@lang('web_layout.local_tb_updated_at')</th>
                            <th class="text-center" style="width: 90px;">@lang('web_layout.local_name')</th>
                            <th class="text-center" style="width: 90px;">@lang('web_layout.local_url_name')</th>
                            <th class="text-center" style="width: 14%;">@lang('web_layout.local_actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = 0;
                        @endphp
                        @foreach ($data_item as $row_items)
                        @php
                        $counter++;
                        $data_color = 'style="color: ' . $row_items->color .'"';
                        @endphp
                        <tr>
                            <td class="text-center" style="width: 20px;">{{  $counter }}</td>
                            <td class="text-center" style="width: 20px;">{{  $row_items->id }}</td>
                            <td class="text-center" style="width: 110px; font-size: .55rem;">
                                {{  $row_items->created_at }}</td>
                            <td class="text-center" style="width: 110px; font-size: .55rem;">
                                {{  $row_items->updated_at }}</td>
                            <td class="text-center">{{  $row_items->name_page }}</td>
                            <td class="text-center">{{  $row_items->url_web }}</td>
                            @include('components.tables.buttons')
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('components.tables.pagination')
        </div>
    </div>
</div>
@endsection
