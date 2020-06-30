<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/admin/bootstrap-image-checkbox.min.css')}}">
    <link href="{{ asset('css/admin/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin/lightbox.min.css')}}" />
   
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css" />
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
    <script type="text/javascript" src="{{ asset('js/admin/main.js') }}"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/bootbox.min.js') }}"></script>
<script src="https://www.layuicdn.com/layui-v2.5.6/layui.js"></script>
<script src="{{asset('js/lightbox.min.js')}}"></script>


</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header pb-4">
        @include('admin/includes/header')
        <div class="app-main">
            @include('admin/includes/sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                         @yield('nav')
                        <!-- <div class="page-title-icon">
                            <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                            </i>
                        </div> -->
                        <!-- <div>Regular Tables
                            <div class="page-title-subheading">Tables are the backbone of almost all web applications.
                            </div>
                        </div> -->
                        </div>
                    </div>    
                    </div>

                    <div>
                        
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @yield('extra')
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(".pe-7s-trash, a[data-type='delete']").on('click', function(e) {
            const url = $(this).data('url')
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
                                        location.reload();
                                    }
                                }
                            })
                        }
                       
                    }
                });
            }


        })
    </script>
</body>
</html>