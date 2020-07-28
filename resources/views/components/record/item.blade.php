<div class="container">
    <div class="row py-2">
        <div class="col-sm"><span class="font-weight-bold">日期：</span>{{$data->rd_date}}</div>
    </div>
    <div class="row py-2">
        <div class="col-sm"><span class="font-weight-bold">复查人：</span>{{$data->r_user}}</div>
    </div>
    <div class="row py-2">
        <div class="col-sm"><span class="font-weight-bold">复查信息：</span>{{$data->r_info}}</div>
    </div>
    <p class="text-right">
       
        <a data-type="edit" class="text-muted mr-3" href="javascript:;" data-url="{{route('records.show', $data)}}"><i class="fa fa-fw" aria-hidden="true" title="编辑"></i></a>

        <a href="javascript:;" data-type="delete" data-url="{{route('records.destroy', $data)}}" class="text-secondary"><i style="font-size:16px;color:grey" class="fa fa-fw" aria-hidden="true" title="删除"></i></a>
    </p>
</div>