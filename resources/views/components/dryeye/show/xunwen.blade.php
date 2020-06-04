<div class="container">
    <h3>历史询问</h3>
    <x-display-item label="主诉" :data="$data->suit"/>
    <x-display-item label="既往史" :data="$data->passed"/>
    <x-display-item label="家族史" :data="$data->family"/>
    
</div>