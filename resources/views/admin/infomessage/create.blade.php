@extends('admin.layout')
@section('nav') 添加/编辑 模板消息 @endsection
@section('content')
    <form action="{{isset($data) ? route('message.update', $data): route('message.store')}}" method="post" id="product">
        <x-formtext text="唯一标识" labelcol="1" name="mark" :value="$data->mark??''"/> 
        <x-formtext text="模板消息first" labelcol="1" name="content[first]" :value="$data->content['first']??''"/>
        <x-formtext text="模板消息keyword1" labelcol="1" name="content[keyword1]" :value="$data->content['keyword1']??''"/>
        <x-formtext text="模板消息keyword2" labelcol="1" name="content[keyword2]" :value="$data->content['keyword2']??''"/>
        <x-formtext text="模板消息remark" labelcol="1" name="content[mark]" :value="$data->content['mark']??''"/>
        <x-formtext text="消息链接" labelcol="1" name="content[link]" :value="$data->content['link']??''"/>
            
        
            @isset($data) @method('PUT') @endisset
        <div class="row py-3">
            <label for="" class="col-sm-1"></label>
            <div class="col-sm-6">
              <x-submitbutton />
              <div id="msg" class="text-danger"></div>
            </div>
        </div>
        
    </form>
    <x-errmsg/>

    
    <script>
        
    </script>
@endsection

@section('extra')
        
@endsection