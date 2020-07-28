@props(['label', 'col'])
<div class="form-group row">
  <label class="col-auto col-form-label pr-0">{{$label}}</label>
  <div class="{{$col??'col-sm'}}">
    <input {{ $attributes }} class="form-control">
  </div>
</div>