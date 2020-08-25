<div class="qulv">
    <h3 style="margin-bottom: 0.45rem"><b>生物测量</b></h3>

    <x-home.case.caseitem label="角膜厚度" :right="$data->swcl_qfsd_r??''" :left="$data->swcl_qfsd_l??''"/>
    <x-home.case.caseitem label="前房深度" :right="$data->swcl_qfsd_r??''" :left="$data->swcl_qfsd_l??''"/>
    <x-home.case.caseitem label="瞳孔直径" :right="$data->swcl_tgzj_r??''" :left="$data->swcl_tgzj_l??''"/>
    <x-home.case.caseitem label="角膜直径" :right="$data->swcl_jmzj_r??''" :left="$data->swcl_jmzj_l??''"/>
    <x-home.case.caseitem label="玻璃体" :right="$data->swcl_blt_r??''" :left="$data->swcl_blt_l??''"/>
    <x-home.case.caseitem label="眼轴长度" :right="$data->swcl_yzcd_r??''" :left="$data->swcl_yzcd_l??''"/>
</div>