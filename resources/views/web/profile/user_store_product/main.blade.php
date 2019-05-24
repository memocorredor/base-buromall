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
                            <th>@lang('web_layout.local_id')</th>






                            <th class="text-center">@lang('web_layout.local_actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_item as $row_items)
                        <tr>
                            <td class="text-center" style="width: 60px;">{{  $row_items->id }}</td>








                            <td style="width: 13%;">
                                <ol class="app-crud-icons-list list-unstyled list-inline">

                                    <li class="app-crud-li">
                                        <a href="{{ route($form_show, $row_items->id) }}"
                                            class="btn btn-info crud-table-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </li>

                                    <li class="app-crud-li">
                                        <a href="{{ route($form_edit, $row_items->id) }}"
                                            class="btn btn-success crud-table-btn">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </li>

                                    <li class="app-crud-li">
                                        <form id="deleteform{{ $row_items->id }}"
                                            action="{{ route($form_delete, $row_items->id) }}" method="POST">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <a href="javascript: askdelete({{ $row_items->id }})"
                                                class="btn btn-danger crud-table-btn">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </form>
                                    </li>

                                </ol>
                            </td>
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
