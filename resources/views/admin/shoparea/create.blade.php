@extends('admin.layout')
@section('nav') 添加/编辑 分店区域 @endsection
@section('content')
    <form action="{{isset($data) ? route('areas.update', $data): route('areas.store')}}" method="post">
        <x-formtext text="名称" labelcol="1" name="title" :value="$data->title??''"/>
        <x-formtext text="排序" labelcol="1" name="orderid" :value="$data->description??0" type="number"/>
       
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection