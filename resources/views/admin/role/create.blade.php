@extends('admin.layout')
@section('nav') 添加/编辑 角色 @endsection
@section('content')
    <form action="{{isset($data) ? route('roles.update', $data): route('roles.store')}}" method="post">
        <x-formtext text="名称" labelcol="1" name="title" :value="$data->title??''"/>
        <x-formtext text="描述" labelcol="1" name="description" :value="$data->description??''"/>
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->checked??1"/>
        @foreach(config('manage_menus') as $v)
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm">
                  <h3>{{$v['text']}}</h3>
                </div>
            </div>
            
            @if(!empty($v['submenus']))
                @foreach($v['submenus'] as $item)
                  <div class="row m-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">{{$item['text']}}</div>

                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-index"/>查看</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-create"/>创建</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-update"/>更新</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-delete"/>删除</div>
                  </div>
                @endforeach
            @else
                <div class="row m-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">{{$v['text']}}</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-index"/>查看</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-create"/>创建</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-update"/>更新</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-delete"/>删除</div>
                </div>
            @endif
        @endforeach
        <!-- <h4>项目管理</h4>

            <div class="row">
                <div class="col-sm-1">镜架品牌</div>

                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-glass-index"/>查看</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-glass-store"/>创建</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-glass-update"/>更新</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-glass-delete"/>删除</div>
            </div>

            <div class="row">
                <div class="col-sm-1">镜片品牌</div>

                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-jingpian-index"/>查看</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-jingpian-store"/>创建</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-jingpian-update"/>更新</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="brand-jingpian-delete"/>删除</div>
            </div>

            <div class="row">
                <div class="col-sm-1">学校管理</div>

                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="view-school"/>查看</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="create-school"/>创建</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="update-school"/>更新</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="delete-school"/>删除</div>
            </div>

            <div class="row">
                <div class="col-sm-1">学校管理</div>

                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="view-school"/>查看</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="create-school"/>创建</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="update-school"/>更新</div>
                <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="delete-school"/>删除</div>
            </div> -->
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection