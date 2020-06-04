<h3>处置</h3>
<div class="container">
    <x-textarea text="" rows="5" name="cz" :default="$data->cz??''"/>
    <x-textinput text="医生" name="doctor" :value="$data->doctor??''"/>
    <x-textinput text="日期"  type="date" name="cz_date" :value="$data->cz_date??''"/>
</div>