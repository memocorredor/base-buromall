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
                            <th class="text-center"><i class="fas fa-calendar-alt"></i></th>
                            <th class="text-center"><i class="fas fa-dollar-sign"></i></th>
                            <th class="text-center"><i class="fas fa-store-alt"></i></th>
                            <th class="text-center"><i class="fas fa-store"></i></th>
                            <th class="text-center"><i class="fas fa-user-clock"></i></th>
                            <th class="text-center"><i class="fas fa-gifts"></i></th>
                            <th class="text-center"><i class="fas fa-gavel"></i></th>
                            <th class="text-center" style="width: 14%;">@lang('web_layout.local_actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $counter = 0;
                        $local_name = 'name_' .$meta_lang;
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
                            <td class="text-center" style="width: 20px;" class="hidden-xs">
                                <span class="label label-success">@lang('web_layout.local_show')</span>
                            </td>
                            @else
                            <td class="text-center" style="width: 20px;" class="hidden-xs">
                                <span class="label label-danger">@lang('app_fields.local_no_show')</span>
                            </td>
                            @endif
                            <td class="text-center">{{  $row_items->$local_name }}</td>
                            <td class="text-center">{{  $row_items->nu_days_recu }}</td>
                            <td class="text-center">{{  $row_items->price }}</td>
                            <td class="text-center">{{  $row_items->nu_stores }}</td>
                            <td class="text-center">{{  $row_items->nu_branch }}</td>
                            <td class="text-center">{{  $row_items->nu_employes }}</td>
                            <td class="text-center">{{  $row_items->nu_employes }}</td>
                            <td class="text-center">{{  $row_items->nu_products }}</td>
                            <td class="text-center">{{  $row_items->nu_auction }}</td>
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
