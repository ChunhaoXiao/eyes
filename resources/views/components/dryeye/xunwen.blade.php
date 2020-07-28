<h3>病史询问</h3>
<div class="container">
    <x-textinput text="主诉" name="suit" :value="$data->suit??''"/>
    <x-textinput text="既往史" name="passed" :value="$data->passed??''"/>
    <x-textinput text="家族史" name="family" :value="$data->family??''"/>
</div>