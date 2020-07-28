<x-section-title :title="$title"/>
<div class="container">
  <x-checkbox text="饮食偏好" :options="App\Models\History::EATING" name="eating_menu[]" :checked="$data->eating_menu??[]" />
</div>
 
