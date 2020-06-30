<div class="container mt-3">
    <h3>饮食习惯</h3>
    <x-display-item  labelcol="col-sm-auto" label="" :data="implode('、', array_intersect_key(App\Models\Dryeye::DIET, array_flip($data->diet??[])))"/>
</div>