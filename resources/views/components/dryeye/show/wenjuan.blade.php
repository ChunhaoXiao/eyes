<div class="container mt-3">
    <h3>问卷调查</h3>
    @foreach(App\Models\Dryeye::QUESTIONS as $k => $v)
        <x-display-item :label="$v" labelcol="col-sm-4" :data="isset($data[$k]) && $data[$k] == 1? '是':'否'"/>
    @endforeach
</div>