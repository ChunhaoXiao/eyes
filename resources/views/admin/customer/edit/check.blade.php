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
    
    <x-uploadfile id="maps" picname="map[path][]" textname="map[text][]" title="地形图" field="map" :data="$user->check->map??[]"/>
    <x-uploadfile id="yandi" picname="yandi[path][]" textname="yandi[text][]" field="yandi" title="眼底" :data="$user->check->yandi??[]"/>
    <x-uploadfile id="shengwu" picname="shengwu[path][]" textname="shengwu[text][]" field="shengwu" title="生物测量" :data="$user->check->shengwu??[]"/>
    <x-uploadfile id="fuzhen" picname="fuzhen[path][]" textname="fuzhen[text][]" field="fuzhen" title="复诊" :data="$user->check->fuzhen??[]"/>
    @method('PUT')
    <x-submitbutton class="btn-primary"/>
</form>
@endsection