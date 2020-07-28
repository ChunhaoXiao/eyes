@extends('admin.customerlayout')
@section('form')
<form id="customer-form" action="{{ route('admin.customer.store', ['customer' => $user, 'section' => $section]) }}" method="post">
    <x-aplastic.sdp :data="$user->aplastic"/>
    <x-aplastic.dtps :data="$user->aplastic"/>
    <x-aplastic.jtps :data="$user->aplastic"/>
    <x-aplastic.ypjl :data="$user->aplastic" />
    <x-aplastic.jpjl :data="$user->aplastic" :user="$user"/>
    <x-aplastic.zhusu :data="$user->aplastic"/>
    <x-aplastic.ybfc :data="$user->aplastic"/>
    <x-aplastic.jpfc :data="$user->aplastic"/>
    @method('PUT');
    <x-submitbutton class="btn-primary"/>
</form>        
@endsection
@section('other')
  
 
@endsection    

<x-aplastic.ordermodal :user="$user"/>