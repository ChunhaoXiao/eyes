<div class="qulv">
<h3 style="margin-bottom: 0.45rem"><b>注视性质</b></h3>
    <div class="ql-nn2">
        <h4>右眼</h4>

        <div class="qlpn">
            <x-home.case.zsitem label="中心凹" :value="$data->zsxz_r_zxa??''"/>
            <x-home.case.zsitem label="旁中心" :value="$data->zsxz_r_pzx??''"/>
        </div>


        <div class="qlpn">
            <x-home.case.zsitem label="黄斑" :value="$data->zsxz_r_hb??''"/>
            <x-home.case.zsitem label="黄斑旁" :value="$data->zsxz_r_hbp??''"/>
        </div>


        <div class="qlpn">
            <x-home.case.zsitem label="周边" :value="$data->zsxz_r_zb??''"/>
        </div>
    </div>

    <div class="ql-nn2">
        <h4>左眼</h4>
        <div class="qlpn">
            <x-home.case.zsitem label="中心凹" :value="$data->zsxz_l_zxa??''"/>
            <x-home.case.zsitem label="旁中心" :value="$data->zsxz_l_pzx??''"/> 
        </div>
        <div class="qlpn">
            <x-home.case.zsitem label="黄斑" :value="$data->zsxz_l_hb??''"/>
            <x-home.case.zsitem label="黄斑旁" :value="$data->zsxz_l_hbp??''"/>
        </div>
        <div class="qlpn">
            <x-home.case.zsitem label="周边" :value="$data->zsxz_l_zb??''"/>
        </div>
    </div>
</div>