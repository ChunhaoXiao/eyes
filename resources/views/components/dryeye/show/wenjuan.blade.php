<x-section-title title="问卷调查" />
<div class="container">

    @foreach(App\Models\Dryeye::QUESTIONS as $k => $v)
        <x-display-item :label="$v" labelcol="col-sm-4" :data="isset($data[$k]) && $data[$k] == 1? '是':'否'"/>
    @endforeach
</div>