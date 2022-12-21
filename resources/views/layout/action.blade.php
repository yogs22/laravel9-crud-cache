@if(isset($view_url))
        <a class="btn btn-icon waves-effect btn-sm waves-light btn-info m-b-5" data-hover="tooltip" title="Detail" data-placement="top"
       href="{{ $view_url }}"> <i class="fa fa-sm fa-search"></i>
    </a>
@endif
@if(isset($edit_url))
    <a class="btn btn-icon waves-effect btn-sm waves-light btn-warning m-b-5" data-hover="tooltip" title="Edit" data-placement="top"
       href="{{ $edit_url }}"> <i class="fa fa-sm fa-pencil-alt"></i>
    </a>
@endif
@if(isset($delete_url))
    <form method="POST" action="{{ $delete_url }}"  onsubmit="return confirm('Do you really want to delete this data?');" style="display: inline">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-icon waves-effect btn-sm waves-light btn-danger m-b-5" data-hover="tooltip" title="Hapus" data-placement="top"><i class="fa fa-sm fa-trash"></i></button>
    </form>
@endif
