@extends('admin.customerlayout')

@section('form')
   
   <x-handle.show.zd :data="$user->handle"/>
   <x-handle.show.chuzhi :data="$user->handle"/>
   <div class="row">
           <div class="col-sm">
           <a class="mb-2 mt-2 mr-2 btn-transition btn btn-outline-focus" href="{{route('admin.customer.edit', ['customer' => $user->id, 'section' => 'handle'])}}">编辑</a>
           </div>
        </div>
@endsection