<div class="container">
    <div class="row">
        <div class="col-sm">日期:{{$data->r_date}}</div>
    </div>
    <div class="row">
        <div class="col-sm">复查人:{{$data->r_user}}</div>
    </div>
    <div class="row">
        <div class="col-sm">复查信息:{{$data->r_info}}</div>
    </div>
    <p><i data-url="{{ route('records.destroy', $data) }}" class="pe-7s-trash p-1"></i></p>
</div>