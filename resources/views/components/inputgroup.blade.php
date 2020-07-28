@props(['unit', 'label'])
<div class="row form-group">
    @if(!empty($label))
      <label for="" class="col-sm-auto col-form-label">{{ $label??'' }}</label>
    @endif
    <div class="col-sm">
        <div class="input-group">
            <input  class="form-control" {{ $attributes }}>
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">{{$unit??''}}</button>
            </div>
        </div>
    </div>
</div>