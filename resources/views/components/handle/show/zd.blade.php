<div class="container mb-3">
    <h3>诊断</h3>
    <x-display-item label="右眼" :data="$data->eye_right" />
    <x-display-item label="左眼" :data="$data->eye_left" />
    <x-display-item label="其它" :data="$data->other??''" />
</div>