@extends('home.layout')

@section('content')
    <div class="card_xx">
        <h3>病史询问</h3>
        <div class="zlei">
            <label for="xue">主诉  ：</label>
            <input type="text" class="form-control" id="xue" value="{{$data->suit ?? ''}}" readonly>
        </div>
        <div class="zlei">
            <label for="xun">既往史   ：</label>
            <input type="text" class="form-control" id="xun" value="{{$data->passed ?? ''}}" readonly>
        </div>
        <div class="zlei">
            <label for="idear">家族史    ：</label>
            <input type="text" class="form-control" id="idear" value="{{$data->family ?? ''}}" readonly>
        </div>
    </div>



    <div class="card_xx">
    	<h3>疾病史</h3>
	    <ul class="ganyan_tab" style="display: flex; flex-wrap: wrap;">
	        @foreach(App\Models\Dryeye::DISEASE as $k => $v)
	        	<li style="width: 33%" class="{{in_array($k, $data->disease)?'jon':''}}">{{$v}}</li>
	        @endforeach

	    </ul>
    </div>


    <div class="card_xx">
        <h3>饮食习惯</h3>
    <ul class="ganyan_tab" style="display: flex; flex-wrap: wrap;">
       
        @foreach (App\Models\Dryeye::DIET as $k => $v)
          <li class="{{in_array($k, $data->diet)?'jon':''}}" style="width: 33%">{{$v}}</li>
        @endforeach

    </ul>
    </div>

    <div class="card_xx">
        <h3>干眼问卷</h3>

        <ul class="ganyan_tab">
       <!--  {php} $res = explode(',', $info->survey); 
        $count = count($survey);
        if(!is_array($res) || count($res) < count($survey))
        {
        	$total = $count - count($res);
        	$res = array_pad($res, $count, '0');
        }
        {/php} -->
        <!-- {foreach $survey as $k => $v}
        <li {if $res[$k] == 1} class="jon" {/if} style="display: block; width: 100%">{$v}</li>
        {/foreach} -->
    

        @foreach(App\Models\Dryeye::QUESTIONS as $key => $v)
        
        	<li class="{{$data->survey[$key] == 1 ?'jon':''}}" style="display: block; width: 100%">{{$v}}</li>
        
        @endforeach

        </ul>
    </div>


    <div class="card_xx">
        <h3>用眼情况</h3>
        <div class="gyzlei">
            <!-- <label for="xuegy">每日看电视时间 </label> -->

            <div class="gycxx1">
                <label for="leihegy">每日看电视时长：</label>
                <input type="text" class="form-control" id="leihegy" value="{{$data->tv_time_used ?? ''}}" readonly>
            </div>

           <div class="gycxx1">
               <label for="leihegy12">每日用电脑时长：</label>
               <input type="text" class="form-control" id="leihegy12" value="{{$data->pc_time_used ?? ''}}" readonly>
           </div>
           <div class="gycxx1">
               <label for="leihegy12">每日用手机时长：</label>
               <input type="text" class="form-control" id="leihegy12" value="{{$data->mobile_time_used ?? ''}}" readonly>
           </div>
           <div class="gycxx1">
               <label for="leihegy12">每日看书时长：</label>
               <input type="text" class="form-control" id="leihegy12" value="{{$data->reading_time_used ?? ''}}" readonly>
           </div>
           <div class="gycxx1">
               <label for="leihegy12">眼科病史：</label>
               <input type="text" class="form-control" id="leihegy12" value="{{$data->disease_history ?? ''}}" readonly>
           </div>
            <div class="gycxx1">
               <label for="leihegy12">用眼情况：</label>
               <input type="text" class="form-control" id="leihegy12" value="{{$data->night_study_time ?? ''}}" readonly>
           </div>
            
            <!-- <label for="xue">意义：初步判断泪液分泌量</label> -->
        </div>
    </div>


    <div class="card_xx">
        <h3>眼科检查</h3>
        <div class="gyzlei">
            <label for="xuegy">裸眼 </label>
             <div class="gycxx1">
                <label for="cishugy">右眼：</label>
                <input type="text" class="form-control" id="cishugy" value="{{$data->luoyan_r ?? ''}}" readonly>
            <!-- </div>
            <div class="gycxx1"> -->
                <label for="cishugy12">左眼：</label>
                <input type="text" class="form-control" id="cishugy12" value="{{$data->luoyan_l ?? ''}}" readonly>
            </div>
            
        </div>
        <div class="gyzlei">
            <label for="xuegy">现镜矫正 </label>
             <div class="gycxx1">
                <label for="cishugy">右眼：</label>
                <input type="text" class="form-control" id="cishugy" value="{{$data->xjjz_r ?? ''}}" readonly>
            <!-- </div>
            <div class="gycxx1"> -->
                <label for="cishugy12">左眼：</label>
                <input type="text" class="form-control" id="cishugy12" value="{{$data->xjjz_l ?? ''}}" readonly>
            </div>
            
        </div>

        <div class="gyzlei">
            <label for="xuegy">眼压 </label>
             <div class="gycxx1">
                <label for="cishugy">右眼：</label>
                <input type="text" class="form-control" id="cishugy" value="{{$data->yanya_r ?? ''}}" readonly>
            <!-- </div>
            <div class="gycxx1"> -->
                <label for="cishugy12">左眼：</label>
                <input type="text" class="form-control" id="cishugy12" value="{{$data->yanya_l ?? ''}}" readonly>
            </div>
            
        </div>
        <div class="gyzlei">
            <label for="xuegy">眼睑 </label>
             <div class="gycxx1">
                <label for="cishugy">上眼睑：</label>
                <input type="text" class="form-control" id="cishugy" value="{{$data->yanjian_up ?? ''}}" readonly>
            <!-- </div>
            <div class="gycxx1"> -->
                <label for="cishugy12">下眼睑：</label>
                <input type="text" class="form-control" id="cishugy12" value="{{$data->yanjian_down ?? ''}}" readonly>
            </div>
            
        </div>

        <div class="zlei">
            <label for="idear">睫毛    ：</label>
            <input type="text" class="form-control" id="idear" value="{{$data->jiemao ?? ''}}" readonly>
        </div>
        <div class="zlei">
            <label for="idear">结膜    ：</label>
            <input type="text" class="form-control" id="idear" value="{$data->jiemo ?? ''}}" readonly>
        </div>
        <div class="zlei">
            <label for="idear">角膜   ：</label>
            <input type="text" class="form-control" id="idear" value="{$info.jiaomo ?? ''}" readonly>
        </div>

        <div class="card_xx">
        <h3>泪河高度</h3>
            <ul class="ganyan_tab">

                {foreach $height as $k => $v}
                <li {if $info->height == $k} class="jon" {/if}>{$v}</li>
                {/foreach}

            </ul>
        </div>

        <div class="zlei">
            <label for="idear">   泪液测试 ：</label>
            <input type="text" class="form-control" id="idear" value="{$info.leiye_test ?? ''}" readonly>
        </div> 
        <div class="zlei">
            <label for="idear">   泪膜破裂时间 ：</label>
            <input type="text" class="form-control" id="idear" value="{$info.lmpl_time ?? ''}" readonly>
        </div>
        <div class="zlei">
            <label for="idear">    螨虫检查：</label>
            <input type="text" class="form-control" id="idear" value="{$info.manchong_test ?? ''}" readonly>
        </div>  
         
         <div class="zlei">
            <label for="idear">    确诊治疗方案：</label><br>
            <!-- <input type="text" class="form-control" id="idear" value="{$info.bsxw_shgzqk ?? ''}" readonly> -->
            {if is_array($info->referral)}
            {foreach $info->referral as $v}

            {php} $res = explode('#', $v); {/php}
            <label for="idear"> {if !empty($res[1])} {:date('Y-m-d', $res[1])} {/if} ：</label>
            <input type="text" class="form-control" id="idear" value="{$res[0]}" readonly>
            {/foreach}
            {/if}
        </div>  
        
    </div>
@endsection