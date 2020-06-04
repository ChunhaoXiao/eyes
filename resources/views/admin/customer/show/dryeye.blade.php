@extends('admin.customerlayout')

@section('form')
  <x-dryeye.show.xunwen :data="$user->dryeye" />
  <x-dryeye.show.jbs :data="$user->dryeye" />
  <x-dryeye.show.diet :data="$user->dryeye" />
  <x-dryeye.show.wenjuan :data="$user->dryeye->survey??[]"/>
  <x-dryeye.show.usage :data="$user->dryeye" />
  <x-dryeye.show.jiancha :data="$user->dryeye" />
  <div class="row">
      <div class="col-sm">
      <a class="mb-2 mt-2 mr-2 btn-transition btn btn-outline-focus" href="{{route('admin.customer.edit', ['customer' => $user->id, 'section' => 'dryeye'])}}">编辑</a>
      </div>
   </div>
  <x-dryeye.plan :datas="$user->dryeye->referral??[]"/>
@endsection

<x-dryeye.planmodal :user=$user/>