@extends('home.layout')

@section('content')
	<div class="myopia">
    <h1>眼科病史</h1>
    <div  class="jz_host">
        <p>主诉：</p>
        <div class="jjs">{{ $data->zs ?? ''}}</div>

    </div>

    <div class="jz_host">
        <p>家族史：</p>
        <div class="jjs">

                {{ $data->jzs ?? '' }}

        </div>
    </div>

    <div class="jz_host">
        <!-- <div class="jws"> -->
            <p>既往史：</p>
            <div class="jjs">

                {{ $data->jws1 ?? ''}}

            </div>  
    </div>         
        <!-- </div>
 -->
    <div class="jz_host">   
            <p>视力：</p>
            <div class="jjs">

                {{ $data->shili }}

            </div>   
    </div>


    <div class="jz_host">
        <p>过敏史：</p>
        <div class="jjs">

                {{ $data->gms ?? ''}}

        </div>
    </div>


        <div class="pei1 jz_host">
            <p>是否配镜</p>
            
                <span class="{{ $data->is_pj?'on':''}}"></span>
            
        </div>

        <div class="pei2">
            配几副

                <span>{{ $data->pj_count ?? ''}}</span>副

        </div>
        <div class="pei2">
            多长时间换一次眼镜

                <span>{{ $data->over_yj_time ?? ''}}</span>年

        </div>

        <div class="pei1">
            <p>配镜是否舒适</p>
           
                <span class="{{ $data->eyeclass_ok?'on':''}}"></span>
            
        </div>
        <div class="pei3">
            <p>目前戴镜度数</p>
            <div>右眼：

                    <span>{{$data->right_eye ?? ''}}</span>

            </div>
            <div>左眼：

                    <span>{{ $data->left_eye ?? ''}}</span>

            </div>
        </div>
        <div class="pei4">
            <p>最近一次配镜时间：</p>

                <span style="min-width: 3.2rem;">{{$data->pjsj ?? ''}}</span>

        </div>
        <div class="pei4">
            <p>以往采用矫治方法：</p>

                <span style="min-width: 3.2rem;">{{$data->ywff ?? ''}}</span>

        </div>
        <div class="ysuse">
            <p>饮食习惯 </p>

            <ul class="ys_ul">
                <!-- {volist name='Habit' id='vo' key="k"}
                    <li>
                        {$vo.title}  <span class="{$vo.class}"></span>
                    </li>
                {/volist} -->
                @foreach(App\Models\History::EATING as $k => $v)
                <li>
                    {{$v}} <span class="{{ in_array($k, $data->eating_menu) ? 'on' :''}}"></span>
                </li>    
                @endforeach
            </ul>
        </div>
        <div class="use_yan">
            <p>用眼情况  </p>
        </div>
        <div class="pei2" style="margin-bottom: 0.2rem">
            每晚学习用眼时间

                <span>{{$data->night_study_time ?? ''}}</span>小时

        </div>
        <div class="pei2" style="margin-bottom: 0.2rem">
            两次用眼间隔时间

                <span>{{ $data->use_eye_two_time ?? ''}}</span>小时

        </div>
        <div class="pei2" style="margin-bottom: 0.2rem">
            读书距离

                 <span>{{$data->see_book_size ?? ''}}</span>厘米

        </div>
        <div class="pei1">
            <p>是否用护眼灯</p>
           
                <span class="{{$data->is_use_eyelight? 'on': '' }}"></span>
            
        </div>
        <div class="pei1">
            <p>是否坐着、躺着、走路看书</p>
            <span class="{{$data->is_mutil_see_book?'on':''}}">
                
            </span>
        
        </div>
        <div class="pei5">
            业余班有：

                <span>{{ $data->yub ?? ''}}</span>

        </div>
        <div class="kds">
            看电视电脑时间/周
        </div>

        <!-- {volist name='seeView' id='vo' key="k"} -->
            @foreach(App\Models\History::SEE_VIEWS as $k => $v)
            <div class="pei1">
                <p>{{$v}}</p><span class="{{$k == $data->see_view?'on':''}}"></span>
            </div>
            @endforeach
        <!-- {/volist} -->


        <div class="pei4">
            <p>免疫功能：  </p>

                <span>{{$data->mygn ?? ''}}</span>

        </div>
        <div class="pei4">
            <p>卫生状况：    </p>

                <span>{{$data->wszk ?? ''}}</span>

        </div>
        <div class="pei4">
            <p>依从性：    </p>

                <span>{{ $data->yccx ?? ''}}</span>

        </div>

    </div>
</div>
@endsection