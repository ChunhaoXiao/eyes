<x-section-title title="疾病询问" />
<div class="container">
    <x-formtext labelcol="1" text="主诉" name="suit" :value="$data->suit??''"/>
    <x-formtext labelcol="1" text="既往史" name="passed" :value="$data->passed??''"/>
    <x-formtext labelcol="1" text="家族史" name="family" :value="$data->family??''"/>
</div>