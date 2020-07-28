@props(['text', 'width'])
<div class="form-group row position-relative">
    <label for="" class="col-sm-{{$width??2}} col-form-label">{{ $text??'' }}</label>
    <div class="col-sm-auto">
        <div class="d-sm-flex flex-sm-row align-items-sm-center flex-sm-wrap" style="border:1px solid red; height:a">
            {{ $slot }}
        </div>
    </div>
</div>