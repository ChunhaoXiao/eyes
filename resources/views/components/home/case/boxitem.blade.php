 <div class="jia-box">
    <p style="margin-left: 0;">{{$label}}</p>
    <div class="jia-choose">
        
        <div>是 <span class="{{ !empty($yes)?'on' : '' }}"></span></div>
        <div>否 <span class="{{ empty($yes)? 'on' : '' }}"></span></div>

        <!-- {if condition="!empty($info) && $info['jpjl_yszj1'] == '1'"}
        <div>是 <span class="on"></span></div>
        {else /}
        
        {/if}

        {if condition="!empty($info) && $info['jpjl_yszj1'] == '2'"}
        <div>否 <span class="on"></span></div>
        {else /}
        <div>否 <span></span></div>
        {/if} -->
    </div>
</div>
