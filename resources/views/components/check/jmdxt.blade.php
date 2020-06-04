<h3>角膜地形图</h3>
<div class="container">
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">
            右眼
        </label>
        <div class="col-sm"><x-textinput text="中央SimKs" name="jmdxt_r_zysimks" :value="$data->jmdxt_r_zysimks??''"/></div>
        <div class="col-sm"><x-textinput text="E值" name="jmdxt_r_ez" :value="$data->jmdxt_r_ez??''" /></div>
    </div>
    <div class="row">
        <label for="" class="col-sm-auto col-form-label">
            左眼
        </label>
        <div class="col-sm"><x-textinput text="中央SimKs" name="jmdxt_l_zysimks" :value="$data->jmdxt_l_zysimks??''"/></div>
        <div class="col-sm"><x-textinput text="E值" name="jmdxt_l_ez" :value="$data->jmdxt_l_ez??''"/></div>
    </div>
</div>