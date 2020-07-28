<div class="container p-2">
    <div class="row">
        <div class="col-sm">
            {{ $data->c_comments }}
        </div>
    </div>
    <div class="text-secondary text-muted">
        <span> {{ $data->c_date }}</span>
         <i class="pe-7s-trash ml-2" data-url="{{ route('comments.destroy', $data) }}"></i>
    </div>
</div>