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
                            <th class="text-center" style="width: 20px;">@lang('web_layout.local_id')</th>
                            <th class="text-center" style="width: 110px;">@lang('web_layout.local_tb_created_at')</th>
                            <th class="text-center" style="width: 40px;">@lang('app_fields.local_tb_status')</th>
                            <th class="text-center" style="width: 120px;">@lang('app_fields.local_order_num')</th>
                            <th class="text-center" style="width: 120px;">@lang('app_fields.local_no_item')</th>
                            <th class="text-center" style="width: 14%;">@lang('web_layout.local_actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_item as $row_items)
                        <tr>
                            <td class="text-center" style="width: 20px;">{{ $row_items->id }}</td>
                            <td class="text-center" style="width: 110px; font-size: .55rem;">
                                {{  $row_items->created_at }} </td>
                            <td class="text-center" style="width: 40px;">{{ $row_items->status }}</td>
                            <td class="text-center" style="width: 120px;">{{ $row_items->order_num }}</td>
                            <td class="text-center" style="width: 120px;">{{ $row_items->no_item }}</td>
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
