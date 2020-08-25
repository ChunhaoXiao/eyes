@extends('admin.layout')

@section('content')
    <form action="{{ route('password.update') }}" method="post">
        <x-formtext text="原密码" name="oldpassword" labelcol="1" type="password"/>
        <x-formtext text="新密码" name="password" labelcol="1" type="password"/>
        <x-formtext text="确认密码" name="password_confirmation" labelcol="1" type="password"/>
        @method('PUT')
        <x-submitbutton />
    </form>
    <x-errmsg/>
@endsection