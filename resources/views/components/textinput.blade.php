<!-- An unexamined life is not worth living. - Socrates -->

<div class="form-group row position-relative">
    <label for="" class="{{ $label_col??'col-sm-auto' }} col-form-label">{{ $text }}</label>
    <div class="col-sm">
        <div class="row">
            <div class="col-sm-10"><input {{ $attributes }} class="form-control"></div>
            <div class="d-sm-flex align-items-sm-center"><span>{{ $slot }}</span></div>
        </div>
    </div>
</div>
 