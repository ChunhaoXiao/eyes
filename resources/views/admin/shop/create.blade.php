@extends('admin.layout')
@section('nav') 添加/编辑 分店 @endsection
@section('content')
    <form action="{{isset($data) ? route('shops.update', $data): route('shops.store')}}" method="post">
        <x-formtext text="分店名称" labelcol="1" name="title" :value="$data->title??''"/>
        <x-select label="所属区域" labelcol="1" name="regionid" id="regionid" source="region" :selected="$data->regionid??''" />
        <div class="row form-group">
            <label for="" class="col-sm-1">分店图片</label>
            <div class="col-sm">
            <x-uploadfile id="shoppicture" picname="picurl"  :uploadUrl="route('admin.upload')" title="上传图片" textname="shopimage"/>
            </div>
        </div>
        <x-formtext text="分店地址" labelcol="1" name="address" :value="$data->address??''"/>
        <x-formtext text="分店电话" labelcol="1" name="tel" :value="$data->tel??''"/>
        <div class="row form-group">
            <label for="" class="col-sm-1">二维码</label>
            <div class="col-sm">
            <x-uploadfile id="picurl1" picname="picurl1"  :uploadUrl="route('admin.upload')" title="上传图片" textname="shopimage"/>
            </div>
        </div>
        <x-textarea text="描述" labelcol="1" name="intro" :default="$data->intro??''"/>
        <x-radio text="首页推荐" :options="['1' => '推荐', '0' => '不推荐']" col="1" name="indexstatus" :checked="$data->indexstatus??1"/>
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->status??1"/>
        <x-formtext text="排序" labelcol="1" name="orderid" :value="$data->orderid??0"/>
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection