<div class="container p-2">
    <div class="row">
        <div class="col-sm">
            {{ $data->c_comments }}
        </div>
    </div>
    <div class="text-secondary text-muted">
        <span> {{ $data->c_date }}</span>


         <!-- <i class="pe-7s-trash ml-2" data-url="{{ route('comments.destroy', $data) }}"></i> -->
    </div>

    <div class="text-right">
        <a data-type="edit" class="text-muted mr-3" href="javascript:;" data-url="{{route('comments.show', $data)}}"><i class="fa fa-fw" aria-hidden="true" title="编辑"></i></a>

        <a href="javascript:;" data-type="delete" data-url="{{route('comments.destroy', $data)}}" class="text-secondary"><i style="font-size:16px;color:grey" class="fa fa-fw" aria-hidden="true" title="删除"></i></a>
    </div>
</div>