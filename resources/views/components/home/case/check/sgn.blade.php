 <div class="qulv">
    <h3 style="margin-bottom: 0.45rem"><b>双眼视功能</b></h3>
    <div class="ql-nn1 nn2" style="display: flex; justify-content: space-between; margin-bottom: 10px">
        <div class="yyhk"> nra:<span class="yyspan">{{ $info->jc_sygn_nra??''}}</span></div>
        <div class="yyhk">pra:<span class="yyspan">{{ $info->jc_sygn_pra??''}}</span></div>
        <div class="yyhk">bcc:<span class="yyspan">{{ $info->jc_sygn_bcc??''}}</span></div>
    </div>

     <div style="display: flex; justify-content:space-between; margin-bottom: 10px">
        <div>AMP</div>
        <div class="yyhk">右眼:<span class="yyspan">{{$info->jc_sygn_amp_r??''}}</span></div>
        <div class="yyhk">左眼:<span class="yyspan">{{$info->jc_sygn_amp_l?? ''}}</span></div>
        <div class="yyhk">双眼:<span class="yyspan">{{$info->jc_sygn_amp_c?? ''}}</span></div>
    </div>

    <div style="display: flex; justify-content: space-between;margin-bottom: 10px">
        
        <div class="yyhk">AC/A:<span class="yyspan">{{ $info->jc_sygn_ac_a?? ''}}</span></div>
        <div class="yyhk">AF:<span class="yyspan">{{ $info->jc_sygn_af?? ''}}</span></div>
       
    </div>
     <div style="display: flex; justify-content: space-between;margin-bottom: 10px">
        
        <div class="yyhk">结论:<span class="yyspan">{{ $info->jc_result?? ''}}</span></div>
        
    </div>

</div>