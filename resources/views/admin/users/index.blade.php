@extends('admin.layout')

@section('content')
    <div class="container"> 
        <p><a class="btn btn-info mb-3" href="{{route('admin.customer.create')}}">录入客户信息</a></p>
        <x-user.search />
        <div class="row">
            <div class="col-sm">

               
                <div class="row justify-content-between align-items-center">

                    <div class="col-sm-7 row align-items-center py-2 no-gutters">
                        <div class="col-sm-auto">每页显示</div>
                        <div class="col-sm-auto px-1">
                            <select class="form-control" id="perpage">
                                @foreach(['20' => '20', '50' => '50', '100' => '100', '500' => '500'] as $k => $v)
                                    <option @if(request()->cookie('perpage') == $k) selected @endif value="{{$k}}">{{$v}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        
                        <div class="col-sm-5">条</div>
                    </div>

                  <div class="col-sm text-right">共有 <b>{{ $datas->total() }}</b> 条记录</div>
                  <div class="pr-3">消费总额 <b class="text-danger" id="total_consumes"></b> 元</div>
                </div>

                <table class="table table-hover">
                    <thead class="bg-info text-white">
                        <th class="d-flex"><span>编号</span>
                            <div class="d-flex flex-column ml-1 justify-content-center" style="height:20px">
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'id_asc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/asc.png')}}" /></a>
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'id_desc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/desc.png')}}" /></a>
                            </div>
                        </th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>学校</th>
                        <th>手机</th>
                        <th>会员级别</th>
                        <th class="d-flex">
                            <span>消费金额</span>
                            <div class="d-flex flex-column ml-1 justify-content-center" style="height:20px">
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'tt_asc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/asc.png')}}"/></a>
                              <a href="{{route('admin.users.index', array_merge(request()->query(), ['order' => 'tt_desc']))}}"><img style="width: 10px ;height:10px" src="{{asset('images/desc.png')}}" /></a>
                            </div>
                        </th>
                        <th class="text-center" colspan="3">操作</th>
                    </thead>
                    <tbody>
                        @foreach($datas as $v)
                        <tr>
                            <td>{{$v->id}}</td>
                            <td><a data-hover="popper" data-content="{{$v->customer_info}}" href="{{ route('admin.customer.index', $v) }}">{{ $v->name }}</a></td>
                            <td>{{ $v->sex == 1?'男':'女' }}</td>
                            <td>@if($v->age) {{ $v->age }}岁 @else - @endif </td>
                            <td><a href="javascript:;" @if($v->jie) data-toggle="popover" data-content="{{$v->Jgrade}}" data-placement="right" data-container="body" data-trigger="hover" @endif>{{ $v->schoolobj->name??$v->school }}</a></td>
                            <td>{{ $v->fake_phone }}</td>
                            <td>{{ $v->level == 1 ?'一般会员' : '特殊会员'}}</td>
                            <td>{{ $v->total_consumes['total_consumes']? $v->total_consumes['total_consumes'].'元':'-' }}</td>
                            <td><a href="{{route('medicalcard.create', ['user' => $v->id])}}">就诊卡</a></td>
                            <td><a href="{{ route('admin.customer.index', $v) }}">查看</a></td>
                            <td>发送模板消息</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $datas->withQueryString()->links() }}
            </div>
        </div>
    </div>

    <script>
        $("#perpage").on('change', function(e) {
            const perpage = $(this).val();
            $.ajax({
                url:"{{route('admin.perpage')}}",
                type:'post',
                data:{
                    perpage:perpage
                },
                success: res => {
                    location.href="{{route('admin.users.index')}}"
                }
            })
        })

        $("a[data-hover='popper']").popover({
            //content:"<p>所属店铺：</p>",
            trigger:"hover",
            html:true,
            template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
           // title:"用户信息",
            //placement:auto,

            //container:"body"
        })

        $(function(){
            const datas = $("#search_form").serialize();
            $.ajax({
                url:"{{route('admin.totalconsume')}}",
                data:datas,
                success:res => {
                    console.log('hahahahahah',res)
                    const tt = res.totalconsume > 0 ? res.totalconsume : 0
                    $("#total_consumes").text(tt)
                }
            })
            //alert(datas);
        })

        
    </script>
@endsection