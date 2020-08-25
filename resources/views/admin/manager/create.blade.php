@extends('admin.layout')
@section('nav') 添加/编辑 管理员 @endsection
@section('content')
    <form action="{{isset($data) ? route('manager.update', $data): route('manager.store')}}" method="post">
        <x-formtext text="用户名" labelcol="1" name="username" :value="$data->fake_phone??''"/>
        <x-formtext text="密码" labelcol="1" name="password" type="password"/>

        <x-formtext text="确认密码" labelcol="1" name="password_confirmation" type="password"/>
        <x-formtext text="昵称" labelcol="1" name="nickname" :value="$data->nickname??''"/>
        <x-formtext text="手机号" labelcol="1" name="mobile" :value="$data->fake_phone??''"/>
        <div class="form-group row">
            <label for="" class="col-sm-1">默认头像</label>
            <div class="col-sm-auto d-flex">
              @foreach(App\Models\Manager::AVATARS as $k=> $v)
                <div class="custom-control custom-radio image-checkbox">
                  <input type="radio" class="custom-control-input" id="ck2a{{$k}}" name="avatar" value="{{$k+1}}" {{isset($data->avatar) && $data->avatar == $k+1 ? 'checked': ''}}>
                  <label class="custom-control-label" for="ck2a{{$k}}">
                    <img src="{{asset('images/avatars/'.$v)}}" alt="" class="img-thumbnail rounded" width="100" height="100">
                  </label>
                </div>
              @endforeach
            </div>
            
        </div>
        <x-select label="隶属分店" labelcol=1 name="shop" id="shop" source="shop" :selected="$data->shop??''"/>
        <x-select label="隶属医生" labelcol=1 name="doctor" id="doctor" :options="[0 => '分店管理员']"/>
        <x-select label="所属管理组" labelcol=1 name="group_id" id="group_id" source="role" :selected="$data->group_id??''"/>
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->status??1"/>
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
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