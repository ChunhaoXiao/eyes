
    <x-section-title title="疾病史"/>
    <div class="container">
    <x-display-item  labelcol="col-sm-auto" label="" :data="implode('、', array_intersect_key(App\Models\Dryeye::DISEASE, array_flip($data->disease??[])))"/>
</div>