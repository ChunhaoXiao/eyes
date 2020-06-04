@props(['text', 'default', 'labelcol'])
<div class="form-group row position-relative">
    <label for="" class="col-form-label {{!empty($labelcol)?'col-sm-'.$labelcol:'col-sm-auto'}}">{{ $text }}</label>
    <div class="col-sm">
        <div class="row">
            <div class="col-sm-10"><textarea {{ $attributes }} class="form-control">{{$default??''}}</textarea></div>
            <div class="d-sm-flex align-items-sm-center"><span>{{ $slot }}</span></div>
        </div>
    </div>
</div>