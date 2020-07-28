@extends('admin.customerlayout')
@section('form')
<form id="customer-form" action="{{ route('admin.customer.store', ['customer' => $user, 'section' => $section]) }}" method="post">
    <x-check.visual :data="$user->check"/>
    <x-check.outeye :data="$user->check"/>
    <x-check.eyepos :data="$user->check"/>
    <x-check.sgn :data="$user->check"/>
    <x-check.qgjz :data="$user->check"/>
    <x-check.yandi :data="$user->check"/>
    <x-check.zsxz :data="$user->check"/>
    <x-check.yanya :data="$user->check"/>
    <x-check.leiye :data="$user->check"/>
    <x-check.ctyg :data="$user->check"/>
    <x-check.styg :data="$user->check"/>
    <x-check.tsj :data="$user->check"/>
    <x-check.jmql :data="$user->check"/>
    <x-check.jmdxt :data="$user->check"/>
    <x-check.swcl :data="$user->check"/>
    <x-check.other :data="$user->check"/>

    <x-uploadfile id="maps" textname="1" title="地形图" field="map"  singlepic="0" :pictures="$user->check->map['path']??[]" :description="$user->check->map['text']??[]"/>

    <x-uploadfile id="yandi"  textname="1" field="yandi" title="眼底" :pictures="$user->check->yandi['path']??[]" :description="$user->check->yandi['text']??[]" singlepic="0"/>

    <x-uploadfile id="shengwu"  textname="1" field="shengwu" title="生物测量" :pictures="$user->check->shengwu['path']??[]" :description="$user->check->shengwu['text']??[]" singlepic="0"/>
    
    <x-uploadfile id="fuzhen"  textname="1" field="fuzhen" title="复诊" :pictures="$user->check->fuzhen['path']??[]" :description="$user->check->fuzhen['text']??[]" singlepic="0"/>
    @method('PUT')
    <x-submitbutton class="btn-primary"/>
</form>
@endsection