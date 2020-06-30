@extends('admin.layout')

@section('content')
    @foreach($datas as $v) 

        @if(empty($v->type) || $v->type == 'section')
            <div class="row">
              <div class="col-sm bg-secondary text-white font-bold">
                  <div class="d-flex align-items-center">
                      <div> {{$v->name}}</div>
                      <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-edit" data-container="body" data-toggle="popover" data-content="<input type=text value={{$v->name}} /><button class='ml-1' data-url={{route('customeritem.update', $v)}}>确定</button>" data-html="true"> </i>
                        
                    </a>
                  </div>
               

                
              </div>
              
              <div class="col-sm"></div>
              <div class="col-sm">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">前台显示该区块</label>
                </div>
              </div>
            </div>
            @foreach($v->items as $v1)
                <div class="row">
                    <div class="col-sm">
                    <div class="d-flex align-items-center">
                      <div> {{$v1->name}}</div>
                      <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-edit" data-container="body" data-toggle="popover" data-content="<input type=text value={{$v1->name}} /><button class='ml-1' data-url={{route('customeritem.update', $v1)}}>确定</button>" data-html="true"> </i>
                        
                    </a>
                  </div>
                       
                    </div>
                    <div class="col-sm">{{$v1->identity}}</div>
                    <div class="col-s">
                        <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">前台显示该字段</label>
                        </div>
                    </div>


                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-sm">{{ $v->name }}</div>
                <div class="col-sm">{{ $v->identity }}</div>
            </div>
        @endif
    @endforeach

    <script>
      $(function() {
       
            $('.fa-edit').not(this).popover('hide');
            $(document).on('click', "button.ml-1", function(e) {
              const v = $(this).prev().val();
              const url = $(this).data('url')
              
              
              $.ajax({
                url:url,
                method:'put',
                data:{
                  name:v
                },
                success:res => {
                  location.reload();
                }
              })
              //alert('aaaa');
            })
        
      });
    </script>
@endsection