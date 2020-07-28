
<div class="container mt-3">
<h3>确诊治疗方案 <button type="button" id="create_plan" class="btn btn-success-sm">新增</button></h3>
    @foreach($datas as $v)
    <div class="row mb-2">
        <div class="col-sm-auto">{{$v['created_at']??''}}</div>
        <div class="col-sm-1">
            {{$v['doctor']??''}}
        </div>
        <div class="col-sm-8">
            {{$v['content']??''}}
        </div>
    </div>

    @endforeach
</div>
<script>
    $("#create_plan").on('click', function() {
        $('#add_plan').modal()
    })
</script>