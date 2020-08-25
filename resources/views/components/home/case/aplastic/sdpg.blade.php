<div class="jiaosu">
        <h3>试戴评估记录 </h3>
        <div class="js_od">
            <h4>OD</h4>
            <x-home.case.plasticitem label="镜片编码" :value="$data->sdpgjl_sdcs_jpbm??''"/>
            <x-home.case.plasticitem label="基弧" :value="$data->sdpgjl_sdcs_jh??''"/>
            <x-home.case.plasticitem label="直径" :value="$data->sdpgjl_sdcs_zj??''"/>
            <x-home.case.plasticitem label="目标焦度" :value="$data->sdpgjl_sdcs_mbjd??''"/>
            <x-home.case.plasticitem label="附加度" :value="$data->sdpgjl_sdcs_fjd??''"/>
        </div>
        <div class="js_od">
            <h4>OS</h4>
            <x-home.case.plasticitem label="镜片编码" :value="$data->sdpgjl_os_sdcs_jpbm??''"/>
            <x-home.case.plasticitem label="基弧" :value="$data->sdpgjl_os_sdcs_jh??''"/>
            <x-home.case.plasticitem label="直径" :value="$data->sdpgjl_os_sdcs_zj??''"/>
            <x-home.case.plasticitem label="目标焦度" :value="$data->sdpgjl_os_sdcs_mbjd??''"/>
            <x-home.case.plasticitem label="附加度" :value="$data->sdpgjl_os_sdcs_fjd??''"/>
           <!--  <h4>OS</h4>
            <div class="js_item">
                <span class="js_txt">镜片编码 ：</span><span class="js-box">{$info.sdpgjl_os_sdcs_jpbm ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">基弧   ：</span><span class="js-box">{$info.sdpgjl_os_sdcs_jh ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">直径  ：</span><span class="js-box">{$info.sdpgjl_os_sdcs_zj ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">目标焦度   ：</span><span class="js-box">{$info.sdpgjl_os_sdcs_mbjd ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">附加度  ：</span><span class="js-box">{$info.sdpgjl_os_sdcs_fjd ?? ''}</span>
            </div> -->
        </div>
    </div>