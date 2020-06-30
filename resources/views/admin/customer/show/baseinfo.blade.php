@extends('admin.customerlayout')
@section('form')
<x-section-title title="基本信息"/>
<div class="container">
    <x-display-item label="姓名" :data="$user->name??''"/>
    <x-display-item label="性别" :data="$user->sex==1?'男':'女'"/>
    <x-display-item label="出生日期" :data="$user->birth_day=='1970-01-01' ? '-' :$user->birth_day "/>
    <x-display-item label="学校">
        <div class="row">
          <div class="col-sm-auto">{{$user->schoolobj->name??$user->school}}</div>
          <div class="col-sm-auto">{{!empty($user->jie)? $user->jie.'届':''}}</div>
          <div class="col-sm-auto">{{!empty($user->grade)? $user->grade.'班':''}}</div>
        </div>
    </x-display-item>

    <x-display-item label="手机" :data="$user->phone??''"/>
    <x-display-item label="初诊日期" :data="$user->go_date??''"/>
    <x-display-item label="会员类型" :data="$user->level == 1? '一般会员':'特殊会员'"/>
    <x-display-item label="修改日期" :data="$user->modified_date??''"/>
    <x-display-item label="信息来源" :data="$user->src->name??$user->data_src"/>
    <x-display-item label="治疗卡类型" :data="$user->card_cure->name??'无'"/>
    <x-display-item label="干眼卡类型" :data="$user->card_dryeye->name??'无'"/>
    <x-display-item label="所属分店" :data="$user->shop->title"/>
    <x-display-item label="备注" :data="$user->contenct??''"/>
    <x-display-item label="最后修改时间" :data="$user->update_time??''"/>
</div>
<a class="m-3  btn-transition btn btn-outline-info" href="{{ route('admin.customer.edit', ['customer' => $user->id, 'section' => 'baseinfo']) }}">编辑</a>
<!--回访记录-->
<x-customer.call-back :data="$user->callbacks()->latest()->take(4)->get()->reverse()"/>
<!--消费记录-->  
<x-customer.consume :data="$user->consumes()->with(['shop','consume_type', 'product'])->latest()->take(10)->get()"/>
@endsection
<x-customer.callmodal :user="$user"/>
<x-customer.consume-modal :user="$user" />