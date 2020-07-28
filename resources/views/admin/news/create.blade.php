@extends('admin.layout')
@section('nav') 添加/编辑 资讯 @endsection
@section('content')
    <form action="{{isset($data) ? route('news.update', $data): route('news.store')}}" method="post" id="product">
        <x-formtext text="标题" labelcol="1" name="title" :value="$data->title??''"/>
        <div class="row form-group">
            <label for="" class="col-sm-1 col-form-label">封面图</label>
            <div class="col-sm-6">
            <x-uploadfile field="cover" singlepic="1" :pictures="$data->cover??[]"/>
            </div>
        </div>
      

        <div class="row form-group">
            <label for="" class="col-sm-1 col-form-label">内容</label>
            <div class="col-sm-9">
              <x-editor name="content" :data="$data->content??''"/>
            </div>
        </div>
        
        <x-formtext text="信息来源" labelcol="1" name="source" :value="$data->source??''"/>

            
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="published" :checked="$data->status??1"/>
            @isset($data) @method('PUT') @endisset
        <div class="row py-3">
            <label for="" class="col-sm-1"></label>
            <div class="col-sm-6">
              <x-submitbutton />
              <div id="msg" class="text-danger"></div>
            </div>
        </div>
        
    </form>
    <x-errmsg/>

    
    <script>
        $("#shop").on('change', function(){

            let shop = $(this).val()? $(this).val() : 0 ;
            $.ajax({
                url:"/admin/shopdoctor/"+shop,
                success:res => {
                    let str = '<option value="0">分店管理员</option>';
                    if(res.length > 0) {
                        res.map(item => {
                            str += "<option value="+item.id+">"+item.title+"</option>";
                        })
                    }
                    $("#doctor").empty().append(str)
                }
            })
        })
        $(function(){
            $("#shop").trigger('change');
        })
    </script>
@endsection

@section('extra')
        <!-- <script src="{{ asset('js/wangEditor.min.js') }}"></script>

        <script type="text/javascript">
        var E = window.wangEditor
        var editor = new E('#editor')
        
        editor.create()

        $(function(){
            const edit = "{{isset($data)?1:0}}";
            if(edit == 0) {
                $("div[contenteditable=true]").html('')
            }
           
            const url = "{{isset($data) ? route('product.update', $data) : route('product.store')}}";
            const type = "{{isset($darta)? 'put':'post'}}";
            $(".btn").on('click', function(e){
               let datas = $("#product").serialize();
               datas += '&description='+editor.txt.html();
              
               $.ajax({
                   url:url,
                   type:type,
                   data:datas,
                   success:res => {
                       location.reload();
                   },
                   error: res => {
                       //console.log(res.status);
                       if(res.status == 422) {
                           const msgarr = Object.values(res.responseJSON.errors);
                           const msg = msgarr[0][0];
                           $("#msg").empty().text(msg);
                       }
                   }
               })
                return false
            })
        })
    </script> -->
@endsection