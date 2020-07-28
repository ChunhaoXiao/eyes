@extends('admin.layout')
@section('nav') 添加/编辑 @endsection
@section('content')
    
    <form action="{{isset($data) ? route('nav.update', $data): route('nav.store')}}" method="post">
        <x-formtext text="导航名称" labelcol="1" name="title" :value="$data->title??''"/>
        <x-select label="上级导航" labelcol="1" name="parentid" :options="$topnavs" :selected="$data->parentid??''"/>
        <x-formtext text="导航链接" labelcol="1" name="url" :value="$data->url??''"/>
        @if(request()->pos == 'navzh')
        <div class="row form-group">
            <label for="" class="col-sm-1">图片</label>
            <div class="col-sm">
            
            <x-uploadfile id="shoppicture" picname="picurl"  :uploadUrl="route('admin.upload')" title="上传图片" :pictures="$data->picurl??''" field="picurl" singlepic="1"/>
            </div>
        </div>

        @endif

        @if(request()->pos == 'navdi')

        <div class="row form-group">
            <label for="" class="col-sm-1">图片</label>
            <div class="col-sm">
            <x-uploadfile id="picurl1" field="picurl"  :uploadUrl="route('admin.upload')" title="上传图片" :pictures="$data->picurl??[]" singlepic="1"/>
            </div>
        </div>
        <div class="row form-group">
            <label for="" class="col-sm-1">图片</label>
            <div class="col-sm">
            <x-uploadfile id="picurl2" field="picurl02"  :uploadUrl="route('admin.upload')" title="上传图片" :pictures="$data->picurl02??[]" singlepic="1"/>
            </div>
        </div>
        @endif

        <x-formtext text="排序" labelcol="1" name="orderid" :value="$data->orderid??''" type="number"/>
        
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->status??1"/>
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
    
    <script>
        // $("#shop").on('change', function(){
        //     let shop = $(this).val()? $(this).val() : 0 ;
        //     $.ajax({
        //         url:"/admin/shopdoctor/"+shop,
        //         success:res => {
        //             let str = '<option value="0">分店管理员</option>';
        //             if(res.length > 0) {
        //                 res.map(item => {
        //                     str += "<option value="+item.id+">"+item.title+"</option>";
        //                 })
        //             }
        //             $("#doctor").empty().append(str)
        //         }
        //     })
        // })
        // $(function(){
        //     $("#shop").trigger('change');
        // })
    </script>
@endsection