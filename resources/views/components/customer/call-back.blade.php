@props(['data'])
<div style="max-height: 400px;">

    <div class="row mb-2">
        <div class="col-sm-1">回访记录</div> 
        <!-- <i id="add_callback" class="pe-7s-note" style="font-size: 16px" data-toggle="modal" data-target="#myModal"></i> -->
        <div class="col-sm-1" style="font-size:18px" id="add_callback" data-toggle="modal" data-target="#myModal"><a class="pe-7s-note" href="javascript:;"></a></div>
    </div>

    @foreach($data as $v)
    <div class="alert alert-warning alert-dismissible fade show" role="alert" >
        {{$v->content}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="text-muted">{{$v->create_time->toDateString()}}</div>
    </div>
    @endforeach
    
</div>

<script type="module">
   $(function() {
    $("#add_callback").on('click', function() {
        $("#add_call").modal()
    })    
   })
</script>
