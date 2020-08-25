<x-section-title title="饮食习惯" />
<div class="container">
    <x-checkbox :options="App\Models\Dryeye::DIET"  name="diet[]" :checked="$data->diet??[]"/>
</div>