<!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
<div class="row">
    <label for="" class="{{$col?'col-sm-'.$col : 'col-sm-auto'}} col-form-label">{{ $text }}</label>
    <div class="col-sm d-flex align-items-sm-center">
        @foreach($options as $k => $v)
            <div class="custom-radio custom-control custom-control-inline ml-3">
                <input type="radio" id="exampleCustomRadio{{$k}}{{$attributes['name']}}" {{ $attributes }} class="custom-control-input"  {{ $isChecked($k)? 'checked' : '' }}
                value="{{$k}}">
                <label class="custom-control-label" for="exampleCustomRadio{{$k}}{{$attributes['name']}}"> {{$v}}</label>
            </div>
        @endforeach
    </div>
</div>
 