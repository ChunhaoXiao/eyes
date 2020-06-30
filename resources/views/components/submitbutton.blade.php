<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<div class="position-relative row form-check">
    <div class="col-sm-10">
        @csrf
        <div class="d-sm-flex align-items-sm-center">

          <button class="btn {{$class}}">{{$text}}</button>
          <span id="msgs" class="ml-2">{{session('success') == 1 ?'操作成功':''}}</span>
        </div>
        
        
    </div>
</div>