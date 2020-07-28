@extends('admin.customerlayout')
@section('form')
    <form method="post" id="customer-form" action="{{ route('admin.customer.store') }}">
        <x-customer.customer-info title="基本信息"/>
        <x-submitbutton/>
    </form>
@endsection
