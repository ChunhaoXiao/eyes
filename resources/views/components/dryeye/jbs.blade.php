<x-section-title title="疾病史" />
<div class="container">
    <x-checkbox :options="App\Models\Dryeye::DISEASE" id="disease" name="disease[]" :checked="$data->disease??[]"/>
</div>