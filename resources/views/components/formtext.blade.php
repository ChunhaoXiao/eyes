@props(['labelcol', 'text'])
<div class="form-group row">
    <label for="aaa" class="col-form-label {{!empty($labelcol)?'col-sm-'.$labelcol:'col-sm-auto'}}">{{ $text }}</label>
    <div class="col-sm">
        <div class="row">
            <div class="col-sm-10"><input {{ $attributes }} class="form-control"></div>
            <div class="d-sm-flex align-items-sm-center"><span>{{ $slot }}</span></div>
        </div>
    </div>
</div>
 