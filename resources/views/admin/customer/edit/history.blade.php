@extends('admin.customerlayout')

@section('form')
    <form id="customer-form" action="{{ route('admin.customer.update', ['customer' => $user, 'section' => $section]) }}" method="post">
        <x-history.jiwangshi title="病史" :data="$user->history"/>
        <x-history.diet  title="饮食习惯" :data="$user->history"/>
        <x-history.usage title="用眼习惯" :data="$user->history"/>
        @method('PUT')
        <x-submitbutton class="btn-primary"/>
    </form>
@endsection