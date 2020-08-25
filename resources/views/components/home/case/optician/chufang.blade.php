<div class="chufang">
        <h3>处方</h3>
        <div class="cf-blod">
            <p>眼镜类型   </p>
            <div>{{$data->yjlx ?? ''}}</div>
        </div>
    </div>
    <div class="qulv">
        <!-- <h3 style="margin-bottom: 0.35rem">远用</h3> -->
        <x-home.case.chufangitem label="球镜" :right="$data->qiujing_r??''" :left="$data->qiujing_l??''"/>
        <x-home.case.chufangitem label="柱镜" :right="$data->zhujing_r??''" :left="$data->zhujing_l??''"/>
        <x-home.case.chufangitem label="光轴" :right="$data->guangzhou_r??''" :left="$data->guangzhou_l??''"/>
        <x-home.case.chufangitem label="棱镜" :right="$data->lengjing_r??''" :left="$data->lengjing_l??''"/>
        <x-home.case.chufangitem label="底向" :right="$data->dixiang_r??''" :left="$data->dixiang_l??''"/>
        <x-home.case.chufangitem label="矫正视力" :right="$data->jzsl_r??''" :left="$data->jzsl_l??''"/>
        <x-home.case.chufangitem label="瞳距" :right="$data->tongju_r??''" :left="$data->tongju_l??''"/>
        <!-- <div class="ql-nn1">
            <div class="yydiv yywidth">球镜</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$v.qiujing_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$v.qiujing_l ?? ''}</span></p>
        </div> -->
        <!-- <div class="ql-nn1">
            <div class="yydiv yywidth">柱镜</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$v.zhujing_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$v.zhujing_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">光轴</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$v.guangzhou_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$v.guangzhou_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">棱镜</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$v.lengjing_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$v.lengjing_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">底向</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$v.dixiang_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$v.dixiang_l ?? ''}</span></p>
        </div>
        <div class="ql-nn1">
            <div class="yydiv yywidth">矫正视力</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$v.jzsl_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$v.jzsl_l ?? ''}</span></p>
        </div> -->
        <!-- <div class="ql-nn1">


            <div class="yydiv yywidth">瞳距</div>
            <p class="yyhk">右眼 ：<span class="yyspan">{$info.tongju_r ?? ''}</span></p>
            <p class="yyhk">左眼 ：<span class="yyspan">{$info.tongju_l ?? ''}</span></p>

        </div> -->
        
        <div class="ql-nn1">
            <p class="yyhk">镜片品牌 ：<span class="yymid">{{$data->jpbrand->name ?? ''}}</span></p>
        </div>
        <div class="ql-nn1">    
            <p class="yyhk">镜片价格 ：<span class="yymid">{{$data->jingpian_price ?? ''}}</span></p>
        </div>

        <div class="ql-nn1">
            <p class="yyhk">镜架品牌 ：<span class="yymid">{{$data->jjbrand->name ?? ''}}</span></p>
        </div>

        <div class="ql-nn1">    
            <p class="yyhk">镜架价格 ：<span class="yymid">{{$data->jingjia_price ?? ''}}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt" style="text-align: left;">实收：</span> <span class="yylong">{{ $data->total_price ?? ''}}</span></p>
        </div>
        <div class="ql-nn1">
            <p class="yyhk"><span class="yyltxt" style="text-align: left;">日期：</span> <span class="yylong">{$data->add_date ?? ''}}</span></p>
        </div>

    </div>