<div class="jiaosu">
    <h3>交片记录</h3>
    <div class="js_od">
        <x-home.case.plasticitem label="日期" :value="$data->jpjl_date??''"/>
        <x-home.case.plasticitem label="交片人" :value="$data->jpjl_jpr??''"/>
        <x-home.case.plasticitem label="收片人" :value="$data->jpjl_spr??''"/>
    </div>
</div>
    
    <x-home.case.boxitem label="是否已向用户展示戴镜、摘镜" :yes="$data->jpjl_yszj1 == 1"/>
    <x-home.case.boxitem label="是否已让用户自行操作戴镜、摘镜" :yes="$data->jpjl_zxcz == 1"/>
    <x-home.case.boxitem label="是否已向用户示范镜片处理" :yes="$data->jpjl_jphl == 1"/>
    <x-home.case.boxitem label="是否已让用户自行操作镜片处理" :yes="$data->jpjl_zxczjphl == 1"/>
    <x-home.case.boxitem label="是否已告知用户镜片易碎" :yes="$data->jpjl_jpys == 1"/> 
    <x-home.case.boxitem label="是否已告知用户镜盒吸棒护理方式" :yes="$data->jpjl_mkxphl == 1"/> 
    <x-home.case.boxitem label="是否已告知用户明晨戴镜检查" :yes="$data->jpjl_fc == 1"/> 
    <x-home.case.boxitem label="是否已将镜片浸泡" :yes="$data->jpjl_jp == 1"/>  
    <x-home.case.boxitem label="是否已将热线号码告诉客户" :yes="$data->jpjl_phone == 1"/>
    <x-home.case.boxitem label="是否已告诉客户特别注意" :yes="$data->jpjl_zhuyi == 1"/>
    <x-home.case.boxitem label="是否已将说明书交给客户" :yes="$data->jpjl_sms == 1"/>
    <x-home.case.boxitem label="是否已让用户购买眼药水并告知使用方法" :yes="$data->jpjl_mys == 1"/>

     <div class="js_od" style="margin-top: 0.8rem;">
        <x-home.case.plasticitem label="复诊记录日期" :value="$data->jpjl_bottom_date??''"/>
        <x-home.case.plasticitem label="已戴镜时间" :value="$data->jpjl_ydsj??''"/>
        <x-home.case.plasticitem label="检查人" :value="$data->jpjl_check_user??''"/>

        <!-- <div class="js_item">
            <span class="js_txt" style="width: 2.1rem">复诊记录日期：</span><span class="js-box">{$info.jpjl_bottom_date ?? ''}</span>
        </div> -->
        <!-- <div class="js_item">
            <span class="js_txt" style="width: 2rem">已戴镜时间：</span><span class="js-box">{$info.jpjl_ydsj ?? ''}</span>
        </div>
        <div class="js_item">
            <span class="js_txt">检查人：</span><span class="js-box">{$info.jpjl_check_user ?? ''}</span>
        </div> -->
    </div>



    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已向用户展示戴镜、摘镜</p>
        <div class="jia-choose">
            
            {if condition="!empty($info) && $info['jpjl_yszj1'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_yszj1'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->


    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已让用户自行操作戴镜、摘镜</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_zxcz'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_zxcz'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已向用户示范镜片处理</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_jphl'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_jphl'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
   <!--  <div class="jia-box">
        <p style="margin-left: 0;">是否已让用户自行操作镜片处理</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_zxczjphl'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_zxczjphl'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->

    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已告知用户镜片易碎</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_jpys'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_jpys'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已告知用户镜盒吸棒护理方式</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_mkxphl'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_mkxphl'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
   <!--  <div class="jia-box">
        <p style="margin-left: 0;">是否已告知用户明晨戴镜检查</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_fc'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_fc'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已将镜片浸泡</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_jp'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_jp'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已将热线号码告诉客户</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_phone'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_phone'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已告诉客户特别注意</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_zhuyi'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_zhuyi'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已将说明书交给客户</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_sms'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_sms'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
    <!-- <div class="jia-box">
        <p style="margin-left: 0;">是否已让用户购买眼药水并告知使用方法</p>
        <div class="jia-choose">
            {if condition="!empty($info) && $info['jpjl_mys'] == '1'"}
            <div>是 <span class="on"></span></div>
            {else /}
            <div>是 <span></span></div>
            {/if}

            {if condition="!empty($info) && $info['jpjl_mys'] == '2'"}
            <div>否 <span class="on"></span></div>
            {else /}
            <div>否 <span></span></div>
            {/if}
        </div>
    </div> -->
   