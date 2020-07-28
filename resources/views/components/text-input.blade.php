<!-- An unexamined life is not worth living. - Socrates -->
@props(['labelcol', 'text'])
<div class="form-group row position-relative">
    <label for="" class="col-form-label {{$labelcol??'col-sm-auto'}}">{{ $text }}333 {{$labelcol}}</label>
    <div class="col">
        <div class="row">
            <div class="col-sm-10"><input {{ $attributes }} class="form-control"></div>
            <div class="d-sm-flex align-items-sm-center"><span>{{ $slot }}</span></div>
        </div>
    </div>
</div>
 