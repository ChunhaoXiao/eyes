@extends('admin.customerlayout')
@section('form')
    <form id="customer-form" action="{{ route('admin.customer.store', ['customer' => $user, 'section' => $section]) }}" method="post">
        <x-optician.yiban :data="$user->optician"/>
        <x-optician.qujing :data="$user->optician"/>
        <x-submitbutton class="btn-primary"/>
        @method('PUT')
    </form>
@endsection

@section('other')
  
@endsection


