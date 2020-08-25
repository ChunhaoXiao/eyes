@extends('home.layout')

@section('content')
<div class="review-box">
    <h1>基本信息</h1>
    <ul class="infotion">
       <li>
           <div class="info-name">姓名</div>
           <div class="info-cont">
                {{ $user->name ?? ''}}
           </div>
       </li>

        <li>
            <div class="info-name">性别   </div>
            <div class="info-cont">
                {{ $user->sex ==1 ?'男': '女'}}
            </div>
        </li>
        
        <li>
            <div class="info-name">出生日期  </div>
            <div class="info-cont">
                {{ $user->birth_day ?? ''}}
            </div>
        </li>

        <li>
            <div class="info-name">学校  </div>
            <div class="info-cont">

                    {{$user->schoolobj->name ?? $user->school??''}}
            </div>
        </li>
         <li>
            <div class="info-name">届  </div>
            <div class="info-cont">

                    {{$user->jie ?? ''}}
            </div>
        </li>

         <li>
            <div class="info-name">班级  </div>
            <div class="info-cont">

                {{ $user->grade ?? '' }}
            </div>
        </li>

       <!--  <li>
            <div class="info-name">右眼视力 </div>
            <div class="info-cont">

                {$info.righteye ?? ''}

            </div>
        </li>

        <li>
            <div class="info-name">左眼视力 </div>
            <div class="info-cont">
                {$info.lefteye ?? ''}
            </div>
        </li> -->
        
        <!-- <li>
            <div class="info-name">备注 </div>
            <div class="info-cont">
                {$info.contenct ?? ''}
            </div>
        </li> -->

        <li>
            <div class="info-name"> 初诊日期 </div>
            <div class="info-cont">
                {{$user->go_date ?? ''}}
            </div>
        </li>

        <li>
            <div class="info-name">信息来源 </div>
            <div class="info-cont">
                <!-- {$info->from[$info->data_src] ?? ''} -->
                {{ $user->src->name??$user->data_src??'' }}
            </div>
        </li>

        <li>
            <div class="info-name">卡类型 </div>
            <div class="info-cont">
                {{$user->card->name??''}}
            </div>
        </li>

        <li>
            <div class="info-name">所属分店 </div>
            <div class="info-cont">
                {{ $user->shop->title??''}}
            </div>
        </li>

        

       
        <!-- <li>
            <div class="info-name">职业   </div>
            <div class="info-cont">

                    {$info.work ?? ''}

            </div>
        </li> -->
        
        <!-- <li>
            <div class="info-name">监护人   </div>
            <div class="info-cont">

                    {$info.see_name ?? ''}

            </div>
        </li>
        <li>
            <div class="info-name">手机号   </div>
            <div class="info-cont">

                    {$info.see_phone ?? ''}

            </div>
        </li>
        <li>
            <div class="info-name">关系   </div>
            <div class="info-cont">

                    {$info.see_relax ?? ''}

            </div>
        </li>
        <li>
            <div class="info-name">职业   </div>
            <div class="info-cont">

                    {$info.see_work ?? ''}

            </div>
        </li>
        <li>
            <div class="info-name">单位</div>
            <div class="info-cont">
                {$info.see_company ?? ''}
            </div>
        </li>
        <li>
            <div class="info-name">住址</div>
            <div class="info-cont">
                {$info.see_address ?? ''}
            </div>
        </li>
        <li>
            <div class="info-name">初诊日期</div>
            <div class="info-cont">
                {$info.go_date ?? ''}
            </div>
        </li>
        <li>
            <div class="info-name">信息来源 </div>
            <div class="info-cont">

                    {$info.data_src ?? ''}

            </div>
        </li>

        
        <li>
            <div class="info-name">左眼矫正</div>
            <div class="info-cont">
                {$info.jz_r ?? ''}
            </div>    
        </li>

        <li>
            <div class="info-name">右眼矫正</div>
            <div class="info-cont">
                {$info.jz_l ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">左眼屈光度</div>
            <div class="info-cont">
                {$info.qgd_r ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">右眼屈光度</div>
            <div class="info-cont">
                {$info.qgd_l ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">左眼眼位</div>
            <div class="info-cont">
                {$info.yw_r ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">右眼眼位</div>
            <div class="info-cont">
                {$info.yw_l ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">左眼色觉</div>
            <div class="info-cont">
                {$info.sj_l ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">右眼色觉</div>
            <div class="info-cont">
                {$info.sj_r ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">左眼裂隙灯</div>
            <div class="info-cont">
                {$info.lxd_l ?? ''}
            </div>    
        </li>
        <li>
            <div class="info-name">右眼裂隙灯</div>
            <div class="info-cont">
                {$info.lxd_r ?? ''}
            </div>    
        </li> -->
    </ul>
</div>
@endsection
