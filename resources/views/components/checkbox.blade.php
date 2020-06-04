<div class="position-relative form-group row">
    <label for="" class="col-auto col-form-label">{{ $text }}</label>

    <div class="col-sm-auto align-self-center">

        @foreach($setopt as $k => $v)
            <div class="custom-checkbox custom-control custom-control-inline">
                <input type="checkbox" {{ $isChecked($k) ? 'checked':''}} id="cbox{{$k}}{{$attributes['name']}}" class="custom-control-input" value="{{$k}}" {{ $attributes }}>
                <label class="custom-control-label" for="cbox{{$k}}{{$attributes['name']}}">{{$v}}</label>
            </div>
        @endforeach
    </div>
</div>