@extends('admin.customerlayout')
@section('form')
    <form id="customer-form" action="{{ route('admin.customer.update', ['customer' => $user, 'section' => $section]) }}" method="post">
        <x-customer.customer-info title="基本信息" :user="$user" />
        @method('PUT')
        <x-submitbutton/>
    </form>
@endsection

<x-customer.callmodal :user="$user"/>
<x-customer.consume-modal :user="$user"/>
