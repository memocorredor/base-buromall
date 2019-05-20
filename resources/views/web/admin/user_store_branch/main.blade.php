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
                            <th class="text-center" style="width: 20px;">@lang('web_layout.local_show')</th>
                            <th class="text-center">@lang('web_layout.local_name')</th>
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
                        @endphp
                        <tr>
                            <td class="text-center" style="width: 20px;">{{  $counter }}</td>
                            <td class="text-center" style="width: 20px;">{{  $row_items->id }}</td>
                            <td class="text-center" style="width: 110px; font-size: .55rem;">
                                {{  $row_items->created_at }}
                            </td>
                            <td class="text-center" style="width: 110px; font-size: .55rem;">
                                {{  $row_items->updated_at }}
                            </td>
                            @if ($row_items->enable === 1)
                            <td class="text-center" style="width: 60px;" class="hidden-xs">
                                <span class="label label-success">@lang('web_layout.local_show')</span>
                            </td>
                            @else
                            <td class="text-center" style="width: 60px;" class="hidden-xs">
                                <span class="label label-danger">@lang('app_fields.local_no_show')</span>
                            </td>
                            @endif
                            <td class="text-center">{{  $row_items->name }}</td>
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
