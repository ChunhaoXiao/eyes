@extends('admin.layout')
@section('nav') 添加/编辑 角色 @endsection
@section('content')
    <form action="{{isset($data) ? route('appointment.update', $data):route('appointment.store')}}" method="post">
        <x-formtext text="标题" labelcol="1" name="title" :value="$data->title??''"/>

        <x-select label="所属分店" labelcol=1 name="shopid" id="shop" source="shop" :selected="$data->shopid??''"/>
        <div class="row form-group">
          <label for="" class="col-sm-1 col-form-label">医生</label>
          <div class="col-sm-3">
            <select name="doctor" id="doctors" class="form-control">
               
            </select>
          </div>
        </div>
        <x-formtext text="预约时间" name="apptime" type="date" labelcol=1 :value="$data->apptime->toDateString()??''"/>
        <x-formtext text="排序" name="orderid" type="number" labelcol=1 :value="$data->orderid??0"/>
        
        <x-radio text="状态" :options="['1' => '正常', '0' => '禁用']" col="1" name="status" :checked="$data->checked??1"/>
            @isset($data) @method('PUT') @endisset
        <x-submitbutton />
    </form>
    <x-errmsg/>

    
    <script>
        $("#shop").on('change', function(){
            const shopid = $(this).val();
            console.log(shopid)
            let selected = "{{$data->doctor??''}}";
            //let selectedDoctor = ;
            $.ajax({
                url:"/admin/shopdoctor/"+shopid,
                
                success:res => {
                    if(res) {
                        let str = '';
                        res.map(item => {
                            let is_selected = item.id == selected?'selected' :'';
                            str += '<option value='+item.id+' ' +is_selected+'>'+item.title+'</option>'
                        })
                        $("#doctors").empty().append(str)
                    }
                }
                
            })
        })

        $(function() {
            $("#shop").trigger('change');
        })
    </script>
@endsection