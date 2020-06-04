@extends('admin.customerlayout')

@section('form')
   <x-aplastic.show.sdp :data="$user->aplastic"/>
   <x-aplastic.show.dtps :data="$user->aplastic" />
   <x-aplastic.show.jtps :data="$user->aplastic"/>
   <x-aplastic.show.ypjl :data="$user->aplastic" />
      
   <x-aplastic.show.jpjl :data="$user->aplastic" />


   
   <x-aplastic.show.yhzs :data="$user->aplastic" />
   <x-aplastic.show.ybfc :data="$user->aplastic" />
   <x-aplastic.show.jpfc :data="$user->aplastic"/>

   <div class="row">
      <div class="col-sm">
      <a class="mb-2 mt-2 mr-2 btn-transition btn btn-outline-focus" href="{{route('admin.customer.edit', ['customer' => $user->id, 'section' => 'aplastic'])}}">编辑</a>
      </div>
   </div>
   
   <x-aplastic.orderlist :user="$user"/>
@endsection
<x-aplastic.ordermodal :user="$user"/>