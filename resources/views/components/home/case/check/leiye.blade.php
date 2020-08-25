<div class="qulv">
    <h3 style="margin-bottom: 0.45rem"><b>泪液</b></h3>
    <x-home.case.caseitem label="泪液量" :right="$data->ly_lyl_r??''" :left="$data->ly_lyl_l??''"/>
    <x-home.case.caseitem label="破裂时间" :right="$data->ly_plsj_r??''" :left="$data->ly_plsj_l??''"/>
    <div class="yymiao"><span>（11-15秒）</span><span>（11-15秒）</span></div>
    <!-- <div class="ql-nn1">
        <div class="yydiv" style="width: 1.2rem;">泪液量</div>
        <p class="yyhk">右眼

                ：<span class="yyspan">{$info.ly_lyl_r ?? ''}</span>

        </p>
        <p class="yyhk">左眼

             ：<span class="yyspan">{$info.ly_lyl_l ?? ''}</span>

        </p>
    </div> -->
   <!--  <div class="ql-nn1" style="margin-bottom: 0.1rem;">
        <div class="yydiv" style="width: 1.2rem;">破裂时间</div>
        <p class="yyhk">右眼

                ：<span class="yyspan">{$info.ly_plsj_r ?? ''}</span>

        </p>
        <p class="yyhk">左眼

                ：<span class="yyspan">{$info.ly_plsj_l ?? ''}</span>

        </p>
    </div> -->
    
</div>