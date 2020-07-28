@props(['unit', 'label', 'col'])
<div class="row form-group no-gutters">
    @if(!empty($label))
      <label for="" class="{{!empty($col)?'col-sm-'.$col:'col-sm-auto'}} col-form-label mr-1">{{ $label??'' }}</label>
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