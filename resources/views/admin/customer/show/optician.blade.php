@extends('admin.customerlayout')

@section('form')
   
   <x-optician.show.yiban :data="$user->optician"/>
   <x-optician.show.qujing :data="$user->optician"/> 
   <div class="row">
      <div class="col-sm">
      <a class="mb-2 mt-2 mr-2 btn-transition btn btn-outline-focus" href="{{route('admin.customer.edit', ['customer' => $user->id, 'section' => 'optician'])}}">编辑</a>
      </div>
   </div>   
   <x-optician.chufang :user="$user"/>

   
@endsection
<x-optician.chufangmodal :user="$user"/>