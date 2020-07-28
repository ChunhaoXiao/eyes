@extends('admin.customerlayout')
@section('form')
    <form id="customer-form"" action="{{ route('admin.customer.store', ['customer' => $user, 'section' => $section]) }}" method="post">
        <x-handle.zd :data="$user->handle"/>
        <x-handle.chuzhi :data="$user->handle"/>
        @method('PUT')
        <x-submitbutton class="btn-primary"/>
       
    </form>
@endsection