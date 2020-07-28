<h3>处方 <button class="btn btn-info-layout btn-sm" type="button" id="create_cf">新增处方</button></h3>
@if($user->optician_datas)
<style>
    table {
        font-size: 14px
    }
</style>
@foreach($user->optician_datas()->with(['jjbrand', 'jpbrand'])->get() as $v)
<div class="container mb-4 border p-3">

    <h5>眼镜类型：{{$v->yjlx??''}}</h5>
    <div class="row">
        <div class="col-sm">
            <table class="table table-bordered table-responsive-sm">
                <thead class="thead-light">
                    <th></th>
                    <td>球镜</td>
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
    $("#create_cf").on('click', function() {
        $("#add_chufang").modal()
    })
</script>