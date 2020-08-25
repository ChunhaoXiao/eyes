<div class="jiaosu">
        <h3>静态配适</h3>
        <div class="js_od">
            <h4>基弧      （正常参考值：-0.4.7-0.4.7，-0.4.7-0.4.7）</h4>
             <x-home.case.plasticitem label="OD" :value="$data->spcs_jh_od??''"/>
              <x-home.case.plasticitem label="OS" :value="$data->spcs_jh_os??''"/>
            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_jh_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_jh_os ?? ''}</span>
            </div> -->
        </div>
        <div class="js_od">
            <h4>反转弧      （正常参考值：-0.4.7-0.4.7，-0.4.7-0.4.7）</h4>
             <x-home.case.plasticitem label="OD" :value="$data->spcs_fzh_od??''"/>
              <x-home.case.plasticitem label="OS" :value="$data->spcs_fzh_os??''"/>
            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_fzh_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_fzh_os ?? ''}</span>
            </div> -->
        </div>
        <div class="js_od">
            <h4>配适弧         （正常参考值：1.0-2.0）</h4>
             <x-home.case.plasticitem label="OD" :vaue="$data->spcs_sph_od??''"/>
              <x-home.case.plasticitem label="OS" :value="$data->spcs_sph_os??''"/>
            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_sph_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_sph_os ?? ''}</span>
            </div> -->
        </div>
        <div class="js_od">
            <h4>戴镜视力   （正常参考值：1.0-2.0）</h4>
            <x-home.case.plasticitem label="OD" :value="$data->spcs_djsl_od??''"/>
            <x-home.case.plasticitem label="OS" :value="$data->spcs_djsl_os??''"/>
            <x-home.case.plasticitem label="日期" :value="$data->spcs_date??''"/>
            <x-home.case.plasticitem label="记录人" :value="$data->spcs_user??''"/>
            <!-- <div class="js_item">
                <span class="js_txt">OD：</span><span class="js-box">{$info.spcs_djsl_od ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">OS：</span><span class="js-box">{$info.spcs_djsl_os ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">日期  ：</span><span class="js-box">{$info.spcs_date ?? ''}</span>
            </div>
            <div class="js_item">
                <span class="js_txt">记录人  ：</span><span class="js-box">{$info.spcs_user ?? ''}</span>
            </div> -->
        </div>
    </div>