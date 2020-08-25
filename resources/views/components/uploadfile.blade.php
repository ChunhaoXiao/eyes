@props(['id', 'field', 'pictures', 'singlepic', 'description', 'textname'])
<button type="button" class="layui-btn mb-2" id="{{$field}}">
  <i class="layui-icon">&#xe67c;</i>{{$title??'选择图片'}}
</button>

<div class="row p-2" id="picture{{$field}}">
    @if(!empty($pictures))

            @foreach((array)$pictures as $k => $v)
                <div class="d-flex flex-column align-items-center m-1">
                    <img src="{{asset('storage/'.$v)}}" alt="" width="100" height="100" style="margin: 5px">
                    @if(!empty($description))
                    <input type="text" name="{{$field.'[text][]'}}" style="width: 100px" value="{{$description[$k]??''}}">
                    @endif
                    <input type="hidden" name="{{$singlepic == 1 ? $field : $field.'[path][]'}}" value="{{$v??''}}">
                    <p class="text-muted">
                    <a class="pe-7s-trash btn text-secondary" href="javascript:;" style="font-size: 20px"></a>
                    </p>
                </div>
            @endforeach
    @endif
   
</div>



<script type="text/javascript" type="module">
  
    layui.use(['upload'], function(e) {
        const upload = layui.upload;
        const ele = "picture"+"{{$field}}";
    
        
        //let arr = ['map', 'yandi', 'shengwu', 'fuzhen']
        upload.render({
            elem: "#{{$field}}",
            url: "{{ route('admin.upload') }}", 
            multiple: true,
            field:'picture',
            done: function(res){
                const singlePicture = "{{$singlepic??0}}";
               
                const fieldname = "{{$field}}"
                let textname = "{{$textname??''}}"
                let textinput = textname? "<input type=text style='width:100px' name="+fieldname+"[text][]>" : '';
                if(singlePicture == 1)
                {
                    $('#'+ele).html("<div class='d-flex flex-column justify-content-center align-items-center mt-2'><img src="+res.data.src+" width=100 height=100 style=margin:5px>"+textinput+"<input type=hidden name={{$field}} value="+res.data.savepath+"></div>");
                }
                else {
                    $('#'+ele).append("<div class='d-flex flex-column justify-content-center align-items-center mt-2'><img src="+res.data.src+" width=100 height=100 style=margin:5px>"+textinput+"<input type=hidden name={{$field.'[path][]'}} value="+res.data.savepath+"></div>");
                    console.log(res)
                }
                
                
            }
        });
        $(".pe-7s-trash").on('click', function(e){
            $(this).parent().parent().remove();
        })
    });
</script>
