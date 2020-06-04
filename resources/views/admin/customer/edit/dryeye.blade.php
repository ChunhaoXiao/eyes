@extends('admin.customerlayout')
@section('form')
    <form id="customer-form" action="{{ route('admin.customer.store', ['customer' => $user, 'section' => $section]) }}" method="post">
        <x-dryeye.xunwen :data="$user->dryeye"/>
        <x-dryeye.jbs :data="$user->dryeye"/>
        <x-dryeye.diet :data="$user->dryeye"/>
        <x-dryeye.wenjuan :data="$user->dryeye->survey??[]"/>
        <x-dryeye.usage :data="$user->dryeye"/>
        <x-dryeye.jiancha :data="$user->dryeye"/>
        @method('PUT')
        <x-submitbutton class="btn-primary"/>
        
    </form>
@endsection

@section('other')
 
@endsection

