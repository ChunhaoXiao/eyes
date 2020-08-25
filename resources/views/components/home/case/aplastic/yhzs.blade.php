<div class="jia-box">
        <p style="margin-left: 0;margin-bottom: 0.3rem;"><b>用户主诉</b></p>
        @foreach(App\Models\Aplastic::ZHUSU as $k => $v)
            <x-home.case.boxitem :label="$v" :yes="in_array($k, $data->zhusu??[])"/>
        @endforeach

        @if($data->yhzs_other_desc)
        <div class="jia-choose jiaco4 jiaco4.7">
            <div>其它
            </div>
            <div class="qita">{{$data->yhzs_other_desc ?? ''}}</div>
        </div>
        @endif
</div>