@extends('admin.layout')
@section('content')
    <x-customer-nav :user="$user??''"/>
    @yield('form')
    @yield('other')

    <script>
        $("#customer-form").on('submit', function(e) {
            e.preventDefault();
            const url = $(this).attr('action')
            const datas = $(this).serialize();
            $.ajax({
                url:url,
                data:datas,
                type:'post',
                success: res => {
                  console.log(res)
                  if(res.status == 0) {
                      console.log('ssss')
                      $("#msgs").removeClass('text-danger').addClass("text-success").html('操作成功')
                      
                      setTimeout(function(){
                          //location.reload()
                          location.href=res.url;
                        }, 1000)
                  }

                },
                error:data => {
                    let errmsg = Object.values(data.responseJSON.errors)[0][0];
                    $("#msgs").removeClass("text-success").addClass("text-danger").html(errmsg)
                    //console.log(s)
                }
            })
            return false;
        })
    </script>
@endsection