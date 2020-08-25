<div class="qulv">
    <h3 style="margin-bottom: 0.45rem"><b>同视机</b></h3>
     <x-home.case.caseitem label="同视机" :right="$data->tsj_tsj_r??''" :left="$data->tsj_tsj_l??''"/>
    <!-- <div class="ql-nn1">
        <div class="yydiv" style="width: 1.2rem;">同时视</div>
        <p class="yyhk">右眼 ：<span class="yyspan">{$info.tsj_tsj_r ?? ''}</span></p>
        <p class="yyhk">左眼 ：<span class="yyspan">{$info.tsj_tsj_l ?? ''}</span></p>
    </div> -->

    <div class="ql-nn2">
        <h4>融合视</h4>
        <div class="rongss">
            <div class="rs-item">
                <p>融合： <span class="yymid">{{ $data->tsj_rhs_rh ?? '' }}</span></p>
                <p>网模对应功能 ：<span class="yymid">{{ $data->tsj_rhs_wmdygn ?? '' }}</span></p>
            </div>
            <div class="rs-item">
                <p>立体视： <span class="yymid">{{ $data->tsj_rhs_lts ?? ''}}</span></p>
                <p>分开： <span class="yymid">{{ $data->tsj_rhs_fk ?? ''}}</span></p>
            </div>
        </div>
    </div>
</div>
