@extends('admin.layout')
@section('nav') 添加/编辑 分店 @endsection
@section('content')
    <form action="{{isset($data) ? route('doctors.update', $data): route('doctors.store')}}" method="post">
        <x-formtext text="医生" labelcol="1" name="title" :value="$data->title??''"/>
        <div class="row form-group">
            <label for="" class="col-sm-1">图片</label>
            <div class="col-sm">
            <x-uploadfile id="shoppicture" picname="picurl"  :uploadUrl="route('admin.upload')" title="上传图片" textname="shopimg" />
            </div>
        </div>
        <x-select label="所属分店" labelcol=1 name="shopid" id="shop" source="shop" :selected="$data->shopid??''"/>
        <x-formtext text="职称职务" labelcol="1" name="academic" :value="$data->academic??''"/>
        <x-formtext text="行政职务" labelcol="1" name="administration" :value="$data->administration??''"/>
        <x-textarea  text="描述" labelcol=1 name="intro"/>
        <x-radio name="indexstatus" :options="[1 => '推荐', 0 => '不推荐']" text="首页推荐" col=1 :checked="$data->indexstatus??0"/>

        <x-formtext text="排序" labelcol="1" name="orderid" :value="$data->orderid??0"/>
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection