<div class="jiaosu">
        <h3>配适测试 动态配适    </h3>

        <div class="js_od">
            <h4>中心定位   （正常参考值：-0.4.7-0.4.7，-0.4.7-0.4.7）</h4>
            <x-home.case.plasticitem label="OD" :value="$data->spcs_zxdw_od??''"/>
            <x-home.case.plasticitem label="OS" :value="$data->spcs_zxdw_os??''"/>
            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_zxdw_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_zxdw_os ?? ''}</span>
            </div> -->
        </div>


        <div class="js_od">
            <h4>活动度      （正常参考值：1.0-2.0）</h4>
            <x-home.case.plasticitem label="OD" :value="$data->spcs_hdd_od??''"/>
            <x-home.case.plasticitem label="OS" :value="$data->spcs_hdd_os??''"/>
            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_hdd_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_hdd_os ?? ''}</span>
            </div> -->
        </div>
        <div class="js_od">
            <h4>移动类型（正常参考值：1.0-2.0）</h4>

            <x-home.case.plasticitem label="OD" :value="$data->spcs_ydlx_od??''"/>
            <x-home.case.plasticitem label="OS" :value="$data->spcs_ydlx_os??''"/>

            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_ydlx_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_ydlx_os ?? ''}</span>
            </div> -->
        </div>
    </div>