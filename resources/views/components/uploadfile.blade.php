
<button type="button" class="layui-btn mb-2" id="{{$id}}">
  <i class="layui-icon">&#xe67c;</i>{{$title??'选择图片'}}
</button>

<div class="row p-2" id="picture{{$id}}">
    @if(!empty($data['path']))
        @foreach($data['path'] as $k => $v)
            <div class="d-flex flex-column align-items-center m-1">
                <img src="{{asset('storage/'.$v)}}" alt="" width="100" height="100" style="margin: 5px">
                <input type="text" name="{{$field.'[text][]'}}" value="{{$data['text'][$k]}}" style="width: 100px">
                <input type="hidden" name="{{$field.'[path][]'}}" value="{{$v}}">
            </div>
        @endforeach
    @endif

    @if(!empty($default))
        <div class="d-flex flex-column align-items-center m-1">
            <img src="{{asset('storage/'.$default)}}" alt="" width="100" height="100" style="margin: 5px">
           
            <input type="hidden" name="{{$picname}}" value="{{$default}}">
        </div>
    @endif
</div>



<script type="text/javascript" type="module">
    layui.use(['upload'], function(e) {
        const upload = layui.upload;
        //let arr = ['map', 'yandi', 'shengwu', 'fuzhen']
        upload.render({
            elem: "#{{$id}}",
            url: "{{ route('admin.upload') }}", //改成您自己的上传接口
            multiple: true,
            field:'picture',
            done: function(res){
                let textname = "{{$textname??''}}"
                let textinput = textname? "<input type=text style='width:100px' name="+textname+">" : '';
                $("#picture{{$id}}").append("<div class='d-flex flex-column justify-content-center align-items-center mt-2'><img src="+res.data.src+" width=100 height=100 style=margin:5px>"+textinput+"<input type=hidden name={{$picname}} value="+res.data.savepath+"></div>");
                console.log(res)
                
            }
        });
    });
</script>
