@props(['data'])
<div style="max-height: 400px;" class="pb-3">
    <x-section-title title="回访记录">
        <!-- <div class="" style="font-size:18px" id="add_callback" data-toggle="modal" data-target="#myModal"><a class="pe-7s-note" href="javascript:;"></a></div> -->
        <div class="" style="font-size:18px" id="add_callback" data-toggle="modal" data-target="#myModal">
        <a class="text-secondary"  href="javascript:;"><i class="fa fa-fw" aria-hidden="true" title="添加消费记录"></i></a>
        </div>
    </x-section-title>
 
    <div class="container  pt-1">
        <div class="row">
            <div class="col-sm">
                @forelse($data as $v)
                <div class="alert alert-warning alert-dismissible fade show" role="alert" >
                    {{$v->content}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" data-id="{{$v->id}}" data-url="{{route('admin.callback.destroy', $v)}}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-muted">{{$v->create_time->toDateString()}}</div>
                </div>
                @empty
                <div class="text-muted">无回访记录</div>
                @endforelse
            </div>
        </div> 
    </div>
</div>

<script type="module">
   $(function() {
    $("#add_callback").on('click', function() {
        $("#add_call").modal()
    })

    $("button[data-dismiss=alert]").on('click', function(e) {
            const url = $(this).data('url');
            let self = this;
            if(url) {
                bootbox.confirm({
                    message: "确定删除？",
                    buttons: {
                        confirm: {
                            label: '确定',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: '取消',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result) {
                            $.ajax({
                                url:url,
                                type:'delete',
                                success: res => {
                                    console.log(res)
                                    if(res.status == 0) {
                                        //location.reload();
                                        $(self).parent().remove();
                                    }
                                }
                            })
                        }
                       
                    }
                });
            }

            return false;
        })
    
    // $(".close").on('click', function(e) {
    //     const id = $(this).data('id');
    //     //alert(id);
    //     $.ajax({
    //         url:"/admin/callback/"+id,
    //         type:'delete',
    //         success: res => {
    //             $(this).parent().remove();
    //         }
    //     })
    //     return false;
    // })    
   })
</script>
