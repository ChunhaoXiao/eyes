<div class="jiaosu" style="margin-top: 0.4rem;">
        <h3>镜片复查</h3>

        <div class="jia-box">
            <p style="margin-left: 0;">表面状况(右)</p>
            
            @foreach(array_chunk(App\Models\Aplastic::BIAOMIAN, 2 ,true) as $k => $v)
                <div class="jia-choose">
                	@foreach($v as $k1 => $v1)
                    <div> {{$v1}} <span class="{{ in_array($k1, $data->bmzk_r??[])? 'on':''}}"></span></div>
               		@endforeach
                </div>
             @endforeach
        </div>

        <div class="jia-box">
            <p style="margin-left: 0;">表面状况(左)</p>

            @foreach(array_chunk(App\Models\Aplastic::BIAOMIAN, 2 ,true) as $k => $v)
                <div class="jia-choose">
                	@foreach($v as $k1 => $v1)
                    <div> {{$v1}} <span class="{{ in_array($k1, $data->bmzk_l??[])? 'on':''}}"></span></div>
               		@endforeach
                </div>
             @endforeach
        </div>
        <div class="jia-box">
            <p style="margin-left: 0;">边缘状况(右)</p>
            <div class="jia-choose">
            	@foreach(App\Models\Aplastic::BIANYUAN as $k => $v)
            		 <div>{{$v}}<span class="{{in_array($k, $data->byzk_r??[])?'on':''}}"></span></div>
            	@endforeach
            </div>
        </div>
        <div class="jia-box">
            <p style="margin-left: 0;">边缘状况(左)</p>
            <div class="jia-choose">
            @foreach(App\Models\Aplastic::BIANYUAN as $k => $v)
            		<div>{{$v}}<span class="{{in_array($k, $data->byzk_l??[])?'on':''}}"></span></div>
            @endforeach
            </div>
        </div>

        <div class="jia-box">
            <x-home.case.boxitem label="是否已过期(右)" :yes="$data->jmfc_sfyjgq_r == 1"/>  
        </div>

        <div class="jia-box">
        	<x-home.case.boxitem label="是否已过期(左)" :yes="$data->jmfc_sfyjgq_1 == 1"/>
        </div>

        <div class="jia-box">
            <p style="margin-left: 0;margin-bottom: 0.3rem;">处置（右）</p>
            <div class="jia-choose jiaco4 jiaco6">
            	@foreach(App\Models\Aplastic::CHUZHI as $k => $v)
            		<div>{{$v}}<span class="{{in_array($k, $data->chuzhi_r??[])?'on':'' }}"></span></div>
            	@endforeach
            </div>
        </div>

        <div class="jia-box">
            <p style="margin-left: 0;margin-bottom: 0.3rem;">处置（左）</p>
            <div class="jia-choose jiaco4 jiaco6">
            	@foreach(App\Models\Aplastic::CHUZHI as $k => $v)
            		<div>{{$v}}<span class="{{in_array($k, $data->chuzhi_l??[])?'on':'' }}"></span></div>
            	@endforeach
            </div>
        </div>

        <div class="jia-box">
        	   <x-home.case.boxitem label="是否已告知用户下次复查时间" :yes="$data->jmfc_sfytzkhxcfcsj == 1"/>
        </div>
        <div class="jia-box">
        	<x-home.case.boxitem label="是否再次告知用户特别注意事项" :yes="$data->jmfc_sfzcgzystbzysx == 1"/>
        </div>
        <div class="jia-box">
        	<x-home.case.boxitem label="是否提醒用户即时购护理产品" :yes="$data->jmfc_sftxyhjsghlcp == 1"/>
        </div>
        <div class="jia-box">
        	<x-home.case.boxitem label="是否告知用户护理液开瓶90天失效" :yes="$data->jmfc_sfgzyhhlikp90tsx == 1"/>
        </div>
        <div class="jia-box">
        	<x-home.case.boxitem label="如换片或补片，是否告知用户取片时间" :yes="$data->jmfc_sfgzyhqpsj == 1"/>
        </div>
    </div>