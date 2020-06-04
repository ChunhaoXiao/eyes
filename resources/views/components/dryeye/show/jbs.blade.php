<div class="container mt-3">
    <h3>疾病史</h3>
    <x-display-item  labelcol="col-sm-auto" label="" :data="implode('、', array_intersect_key(App\Models\Dryeye::DISEASE, array_flip($data->disease??[])))"/>
</div>