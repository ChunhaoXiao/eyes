@props(['checked', 'label'])
<div class="custom-checkbox custom-control custom-control-inline" >
    <input type="checkbox" id="sbox{{$attributes['name']}}"  class="custom-control-input" {{$checked? 'checked':''}} {{ $attributes }}> 
    <label class="custom-control-label" for="sbox{{$attributes['name']}}">{{$label}}</label>
</div>