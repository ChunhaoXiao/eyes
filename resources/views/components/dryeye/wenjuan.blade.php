<x-section-title title="问卷调查" />
<div class="container">
    @foreach(App\Models\Dryeye::QUESTIONS as $k => $v)
        <div class="row mb-2">
            <div class="col-sm">
               <div>{{ $v }}</div>
               
               <x-radio text="" col="c" :options="[1 => '是', 0 => '否']" :name="'survey['.$k.']'" :checked="$data[$k]??0"/>
               
            </div>
        </div>
    @endforeach
</div>