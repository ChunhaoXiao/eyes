<div class="jiaosu" style="margin-top: 0.4rem;">
        <h3>眼部复查</h3>
        @foreach(App\Models\Aplastic::FUCHA as $k => $v)
            <div class="js_od">
                <h4>{{$v}}</h4>
                <div class="js-div">
                    <p>右眼： <span class="jsd-sp">{{ $data->{$k.'_r'}?? ''}} </span></p>
                    <p>左眼： <span class="jsd-sp">{{ $data->{$k.'_r'}??'' }} </span></p>
                </div>
            </div>
        @endforeach

        <!-- <div class="js_od">
            <h4>活动度</h4>
            <div class="js-div">
                <p>右眼： <span class="jsd-sp">{$info.ybfc_hdd_r ?? ''}</span></p>
                <p>左眼： <span class="jsd-sp">{$info.ybfc_hdd_l ?? ''}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>荧光染色评估</h4>
            <div class="js-div">
                <p>右眼： <span class="jsd-sp">{$info.ybfc_ygyspg_r ?? ''}</span></p>
                <p>左眼： <span class="jsd-sp">{$info.ybfc_ygyspg_l ?? ''}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>裸眼视力</h4>
            <div class="js-div">
                <p>右眼： <span class="jsd-sp">{$info.ybfc_lysl_r ?? ''}</span></p>
                <p>左眼： <span class="jsd-sp">{$info.ybfc_lysl_l ?? ''}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>角膜上皮</h4>
            <div class="js-div">
                <p>右眼： <span class="jsd-sp">{$info.ybfc_jmsp_r ?? ''}</span></p>
                <p>左眼： <span class="jsd-sp">{$info.ybfc_jmsp_l ?? ''}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>结膜</h4>
            <div class="js-div">
                <p>右眼： <span class="jsd-sp">{$info.ybfc_jm_r ?? ''}</span></p>
                <p>左眼： <span class="jsd-sp">{$info.ybfc_jm_l ?? ''}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>地形图</h4>
            <div class="js-div">
                <p>右眼： <span class="jsd-sp">{$info.ybfc_dxt_r ?? ''}</span></p>
                <p>左眼： <span class="jsd-sp">{$info.ybfc_dxt_l ?? ''}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>分析与结论</h4>
            <div class="js-div" style="margin-bottom: 0.3rem">
                <p>右眼： <span class="jsd-sp" style="width: 4.7rem;">{$info.ybfc_fxyjl_r ?? ''}</span></p>
            </div>
            <div class="js-div" style="margin-bottom: 0.3rem">
                <p>左眼： <span class="jsd-sp" style="width: 4.7rem;">{$info.ybfc_fxyjl_l ?? ''}</span></p>
            </div>
        </div> -->


        <div class="js_od">
            <h4>处置（根据角膜状况作出）</h4>
            <div class="js-div" style="margin-bottom: 0.3rem">
                <p>右眼： <span class="jsd-sp" style="width: 4.7rem;">{{$data->ybfc_czgujmzk_r ?? ''}}</span></p>
            </div>
            <div class="js-div" style="margin-bottom: 0.3rem">
                <p>左眼： <span class="jsd-sp" style="width: 4.7rem;">{{$data->ybfc_czgujmzk_l ?? ''}}</span></p>
            </div>
        </div>
        <div class="js_od">
            <h4>处置（根据镜片适配度作出）</h4>
            <div class="js-div" style="margin-bottom: 0.3rem">
                <p>右眼： <span class="jsd-sp" style="width: 4.7rem;">{{$data->ybfc_czgjzpspd_r ?? ''}}</span></p>
            </div>
            <div class="js-div" style="margin-bottom: 0.3rem">
                <p>左眼： <span class="jsd-sp" style="width: 4.7rem;">{{ $data->ybfc_czgjzpspd_l ?? ''}}</span></p>
            </div>
        </div>
    </div>