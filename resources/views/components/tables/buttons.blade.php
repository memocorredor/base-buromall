<td style="width: 14%;">
    <ol class="app-crud-icons-list list-unstyled list-inline">

        <li class="app-crud-li">
            <a href="{{ route($form_show, $row_items->id) }}" class="btn btn-info crud-table-btn">
                <i class="fas fa-eye"></i>
            </a>
        </li>

        <li class="app-crud-li">
            <a href="{{ route($form_edit, $row_items->id) }}" class="btn btn-success crud-table-btn">
                <i class="fas fa-edit"></i>
            </a>
        </li>

        <li class="app-crud-li">
            <form id="deleteform{{ $row_items->id }}" action="{{ route($form_delete, $row_items->id) }}" method="POST">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <a href="javascript: askdelete({{ $row_items->id }})" class="btn btn-danger crud-table-btn">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </form>
        </li>

    </ol>
</td>
