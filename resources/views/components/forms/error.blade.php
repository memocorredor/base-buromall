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
