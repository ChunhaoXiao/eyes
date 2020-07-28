<x-section-title title="处方"><button class="btn btn-info-layout btn-sm" type="button" id="create_cf">新增处方</button></x-section-title>
@if($user->optician_datas)
<style>
    table {
        font-size: 14px
    }
</style>
@foreach($user->optician_datas()->with(['jjbrand', 'jpbrand'])->get() as $v)
<div class="container mb-4 border p-3">

    <h5 class="pb-2 font-weight-bold">眼镜类型：{{$v->yjlx??''}}</h5>
    <div class="row">
        <div class="col-sm">
            <table class="table table-bordered table-responsive-sm">
                <thead class="thead-light">
                    <th></th>
                    <th>球镜</th>
                    <th>柱镜</th>
                    <th>光轴</th>
                    <th>棱镜</th>
                    <th>底向</th>
                    <th>视力矫正</th>
                    <th>瞳距</th>
                    <th>总瞳距</th>
                </thead>
                <tbody>
                    <tr>
                        <td>右眼</td>
                        <td>{{ $v->qiujing_r??'' }}</td>
                        <td>{{ $v->zhujing_r??'' }}</td>
                        <td>{{ $v->guangzhou_r??'' }}</td>
                        <td>{{ $v->lengjing_r??'' }}</td>
                        <td>{{ $v->dixiang_r??'' }}</td>
                        <td>{{ $v->jzsl_r??'' }}</td>
                        <td>{{ $v->tongju_r??'' }}</td>
                        <td>{{ $v->total_tongju_r??'' }}</td>
                    </tr>
                    <tr>
                        <td>左眼</td>
                        <td>{{ $v->qiujing_l??'' }}</td>
                        <td>{{ $v->zhujing_l??'' }}</td>
                        <td>{{ $v->guangzhou_l??'' }}</td>
                        <td>{{ $v->lengjing_l??'' }}</td>
                        <td>{{ $v->dixiang_l??'' }}</td>
                        <td>{{ $v->jzsl_l??'' }}</td>
                        <td>{{ $v->tongju_l??'' }}</td>
                        <td>{{ $v->total_tongju_l??'' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-auto">
            <a data-type="chufang" class="text-muted" href="javascript:;" data-url="{{route('prescribe.edit', $v)}}"><i class="fa fa-fw" aria-hidden="true" title="编辑"></i></a>

            <a href="javascript:;" data-type="delete" data-url="{{route('prescribe.destroy', $v)}}" class="text-secondary"><i style="font-size:16px;color:grey" class="fa fa-fw" aria-hidden="true" title="删除"></i></a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-auto">
            镜架品牌:{{$v->jjbrand->name??''}}
        </div>
        <div class="col-sm-auto">
            镜片品牌：{{ $v->jpbrand->name??'' }}
        </div>
        <div class="col-sm-auto">
            镜片价格：{{$v->jingpian_price }}
        </div>
        <div class="col-sm-auto">
            镜架价格：{{$v->jingjia_price }}
        </div>
        <div class="col-sm-auto">
            实收:{{$v->total_price }}
        </div>
        <div class="col-sm-auto">
            日期:{{$v->create_time->toDateString()}}
        </div>
    </div>
    
</div>
@endforeach
@endif
<script>
    $("#create_cf, a[data-type=chufang]").on('click', function(e) {
        $("#add_chufang").modal()
        const url = $(this).data('url');
        //$("input[name=id]").val(0);
        $("#prescribe_form input").val('');
        if(url) {
            $.ajax({
                url:url,
                success:res => {
                    console.log(res);
                    $("input[name=yjlx]").val(res.yjlx);
                    $("input[name='qiujing_r']").val(res.qiujing_r);
                    $("input[name=qiujing_l]").val(res.qiujing_l);
                    $("input[name=zhujing_r]").val(res.zhujing_r);
                    $("input[name=zhujing_l]").val(res.zhujing_l);
                    $("input[name=guangzhou_r]").val(res.guangzhou_r);
                    $("input[name=guangzhou_l]").val(res.guangzhou_l);
                    $("input[name=lengjing_r]").val(res.lengjing_r);
                    $("input[name=lengjing_l]").val(res.lengjing_l);
                    $("input[name=dixiang_r]").val(res.dixiang_r);
                    $("input[name=dixiang_l]").val(res.dixiang_l);
                    $("input[name=jzsl_r]").val(res.jzsl_r);
                    $("input[name=jzsl_l]").val(res.jzsl_l);
                    $("input[name=tongju_r]").val(res.tongju_r);
                    $("input[name=tongju_l]").val(res.tongju_l);
                    $("input[name=total_tongju_r]").val(res.total_tongju_r);
                    $("input[name=total_tongju_l]").val(res.total_tongju_l);
                    $("#jingjia").val(res.jingjia_brand).select2();
                    $("#jingpian").val(res.jingpian_brand).select2();
                    $("input[name=jingpian_price]").val(res.jingpian_price);
                    $("input[name=jingjia_price]").val(res.jingjia_price);
                    $("input[name=total_price]").val(res.total_price);
                    $("input[name=id]").val(res.id)
                    
                }
            })
        }
    })
</script>