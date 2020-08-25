<div class="form-group row align-items-center no-gutters">
    <label for="" class="col-form-label col-sm-{{$labelcol??'auto'}} mr-1">{{ $label }}</label>
    <div class="col-sm-{{$selectedw}}">
      <select  {{ $attributes }} class="form-control" style="min-width: 150px">
        <option value="">请选择</option>
        @foreach ($options as $k => $v)
          <option value="{{ $k }}" {{ $isSelected($k) ? 'selected':''}}>{{$v}}</option>
        @endforeach
      </select>
    </div>

    
  
</div>   


<script type="module">
    let id = "#"+"{{ $attributes['id'] }}";
    $(id).select2()
</script>