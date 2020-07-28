<x-section-title title="处置"/>

<div class="container">
    <x-textarea text="内容" rows="5" name="cz" :default="$data->cz??''"/>
    <x-textinput text="医生" name="doctor" :value="$data->doctor??Auth::user()->username"/>
    <x-textinput text="日期"  type="date" name="cz_date" :value="$data->cz_date??now()->toDateString()"/>
</div>