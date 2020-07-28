@extends('admin.layout')
@section('nav') 就诊卡 @endsection
@section('content')
     
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'medicalcard.create') active @endif" href="{{route('medicalcard.create', request()->user)}}">就诊卡</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  @if(Route::currentRouteName() == 'medicalcard.index') active @endif" href="{{route('medicalcard.index', request()->user)}}">消费记录</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'qrcode.show') active @endif" href="{{route('qrcode.show', request()->user)}}">二维码</a>
            </li>
        </ul>
       
        @if(Route::currentRouteName() == "medicalcard.create")
        <div>
           <form action="{{route('medicalcard.store', $user)}}" method="post">
              <div class="form-group row">
                <div class="col-sm-6">
                    <x-inputgroup name="num"  label="就诊卡剩余" unit="次" type="number" :value="$user->card->num??''"/>
                </div>
              </div>
              <div class="form-group">
                  <x-submitbutton/>
              </div>
           </form>
        </div>

        @elseif(Route::currentRouteName() =="medicalcard.index")

        <div>
            <h3 class="py-3">{{$customer->name}} 的就诊卡消费记录</h3>
            <table class="table table-bordered">
                <thead>
                    <th>就诊时间</th>
                    <th>变更明细</th>
                    <th>所属分店</th>
                    <th>剩余次数</th>
                </thead>
                <tbody>
                    @foreach($datas as $v)
                        <tr>
                            <td>{{ $v->create_time->toDateString() }}</td>
                            <td>{{ $v->change_type }}</td>
                            <td>{{ $v->shop->title??''}}</td>
                            <td>{{$v->sumdata}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @elseif(Route::currentRouteName() == "qrcode.show")
        {!! QrCode::generate(request()->root()); !!}
        @endif

       
    
    <x-errmsg/> 
@endsection