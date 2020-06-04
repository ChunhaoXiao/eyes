@extends('admin.layout')

@section('nav') 添加/编辑 {{App\Models\Category::TYPES[request()->type]??''}} @endsection
@section('content')
    <form action="{{isset($data) ? route('category.update', [request()->type, $data]): route('category.store', request()->type)}}" method="post">
        <x-formtext text="名称" labelcol="1" name="name" :value="$data->name??''"/>
        @if(request()->type == 'card')
            <x-select label="分类" :options="[1 => '干眼卡', 2 => '治疗卡']" name="cardtype" id="cardtype" labelcol=1 :selected="$data->cardtype??''"/>
        @endif
        <x-formtext text="排序" labelcol="1" name="sort" :value="$data->order??0" type="number"/>

        <x-radio text="状态" :options="[1 => '是', 0 => '否']" name="status" :checked="$data->status??1" col="1"/>

            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection