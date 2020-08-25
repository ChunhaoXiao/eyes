@extends('home.layout')

@section('content')
<div class="myopia">
	<h2>角膜接触镜</h2>
	<x-home.case.aplastic.sdpg :data="$data"/>
	<x-home.case.aplastic.dtps :data="$data"/>
	<x-home.case.aplastic.jtps :data="$data"/>
	<x-home.case.aplastic.order :orders="Auth::user()->aplastic_datas??[]"/>
	<x-home.case.aplastic.jpjl :data="$data"/>
	<x-home.case.aplastic.yhzs :data="$data"/>
	<x-home.case.aplastic.ybfc :data="$data"/>
	<x-home.case.aplastic.jpfc :data="$data"/>
</div>	


@endsection