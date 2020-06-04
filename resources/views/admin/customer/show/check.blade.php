@extends('admin.customerlayout')
@section('form')
   <div class="container">
        <x-check.show.visual :data="$user->check"/>
        <x-check.show.outeye :data="$user->check"/>
        <x-check.show.yanwei :data="$user->check"/>
        <x-check.show.sgn :data="$user->check"/>   
        <x-check.show.qgjz :data="$user->check"/> 
        <x-check.show.yandi :data="$user->check"/>
        <x-check.show.zhushi :data="$user->check"/> 
        <x-check.show.yanya :data="$user->check" />  
        <x-check.show.leiye :data="$user->check" />     
        <x-check.show.ctyg :data="$user->check" />
        <x-check.show.styg :data="$user->check" />
        <x-check.show.tsj :data="$user->check" />
        <x-check.show.jmql :data="$user->check" />
        <x-check.show.jmdxt :data="$user->check"/>
        <x-check.show.swcl :data="$user->check" />
        <x-check.show.other :data="$user->check" /> 

        <x-check.show.pictures title="地形图" :datas="$user->check->map"/>
        <x-check.show.pictures title="眼底" :datas="$user->check->yandi"/>
        <x-check.show.pictures title="生物测量" :datas="$user->check->shengwu"/>
        <x-check.show.pictures title="复诊" :datas="$user->check->fuzhen"/>
        <div class="row">
           <div class="col-sm">
           <a class="mb-2 mt-2 mr-2 btn-transition btn btn-outline-focus" href="{{route('admin.customer.edit', ['customer' => $user->id, 'section' => 'check'])}}">编辑</a>
           </div>
        </div>
   </div>

  
@endsection