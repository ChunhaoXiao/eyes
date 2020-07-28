<h3>饮食习惯</h3>
<div class="container">
    <x-checkbox :options="App\Models\Dryeye::DIET"  name="diet[]" :checked="$data->diet??[]"/>
</div>