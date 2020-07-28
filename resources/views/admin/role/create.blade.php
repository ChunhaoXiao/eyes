@extends('admin.layout')
@section('nav') 添加/编辑 角色 @endsection
@section('content')
    <form action="{{isset($data) ? route('roles.update', $data): route('roles.store')}}" method="post">
        <x-formtext text="名称" labelcol="1" name="title" :value="$data->title??''"/>
        <x-formtext text="描述" labelcol="1" name="description" :value="$data->description??''"/>
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->checked??1"/>
        @foreach(config('manage_menus') as $v)
            <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm">
                  <p><span class="font-weight-bold mr-2">{{$v['text']}}</span> <input data-type="check_all" type="checkbox">全选</p>
                </div>
            </div>
            
            @if(!empty($v['submenus']))
                @foreach($v['submenus'] as $item)
                  <div class="row m-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">{{$item['text']}}</div>

                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-index" {{ isset($data)? $data->hasaction($item['url'].'-index'):'' }}/>查看</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-store" {{ isset($data)? $data->hasaction($item['url'].'-store'):'' }}/>创建</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-update" {{ isset($data)? $data->hasaction($item['url'].'-update'):'' }}/>更新</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$item['url']}}-delete" {{ isset($data)? $data->hasaction($item['url'].'-delete'):'' }}/>删除</div>
                  </div>
                @endforeach
            @else
                <div class="row m-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">{{$v['text']}}</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-index" {{ isset($data) ? $data->hasaction($v['url'].'-index'):'' }}/>查看</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-store" {{ isset($data)? $data->hasaction($item['url'].'-store'):'' }}/>创建</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-update" {{ isset($data)? $data->hasaction($item['url'].'-update'):'' }}/>更新</div>
                    <div class="col-sm-auto"><input type="checkbox" name="auth[]" value="{{$v['url']}}-delete" {{ isset($data)? $data->hasaction($item['url'].'-delete'):'' }}/>删除</div>
                </div>
            @endif
            </div>
        @endforeach
        
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>

    <script>
        $(function(){
            $("input[data-type=check_all]").on('click', function(e){
                const is_checked = $(this).prop('checked');
                console.log(is_checked);
                $(this).parents('.container').find("input[type=checkbox]").attr('checked', is_checked);
            })
        })
    </script>
@endsection