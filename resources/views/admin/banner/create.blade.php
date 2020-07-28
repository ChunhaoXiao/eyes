@extends('admin.layout')
@section('nav') 添加/编辑 角色 @endsection
@section('content')
    <form action="{{isset($data) ? route('banner.update', $data): route('banner.store')}}" method="post">
        <x-formtext text="名称" labelcol="1" name="title" :value="$data->title??''"/>
        <div class="row form-group">
            <label for="" class="col-sm-1 col-form-label">图片</label>
            <div class="col-sm">
                <x-uploadfile   id="picurl" picname="picurl"  :uploadUrl="route('admin.upload')" :default="$data->picurl"/>
            </div>
        </div>
        <x-formtext text="链接" labelcol="1" name="linkurl" :value="$data->linkurl??''"/>
        <x-formtext text="排序" labelcol="1" name="orderid" :value="$data->orderid??0"/>
        
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection