@extends('admin.layout')

@section('content')
    @foreach($datas as $v) 

        @if(empty($v->type) || $v->type == 'section')
            <div class="row mb-2">
              <div class="col-sm font-weight-bold">
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
                    <input type="checkbox" class="custom-control-input" id="{{$v->identity}}" {{$v->disabled == 0 ? 'checked':''}} data-id="{{$v->id}}">
                    <label class="custom-control-label" for="{{$v->identity}}">前台显示该区块</label>
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
                        <input type="checkbox" class="custom-control-input" id="{{$v1->identity}}" {{$v1->disabled == 0?'checked' :''}} data-id="{{$v1->id}}">
                        <label class="custom-control-label" for="{{$v1->identity}}">前台显示该字段</label>
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

            $(".custom-control-label").on('click', function(e){
              const id = $(this).prev().data('id');
              const checked = $(this).prev().prop('checked') == true? 1 : 0;

             // alert(id)
             console.log(checked)
              $.ajax({
                url:"/admin/customeritem/"+id,
                data:{
                  disabled:checked
                },
                type:'put',
                success:res => {
                  console.log(res);
                }
              })
              
            })
       
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