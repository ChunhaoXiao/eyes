
    <x-section-title title="饮食习惯"/>
    <div class="container">    
    <x-display-item  labelcol="col-sm-auto" label="" :data="implode('、', array_intersect_key(App\Models\Dryeye::DIET, array_flip($data->diet??[])))"/>
</div>