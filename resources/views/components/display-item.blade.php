<div class="row p-2 border-bottom">
    <div class="{{$labelcol??'col-sm-2'}} font-weight-bold">
        {{$label??''}}
    </div>
    <div class="col-sm-8">
        {{$data??''}}
        {{ $slot }}
    </div>
</div>