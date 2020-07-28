<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<div class="main-card mb-3 card" style="display: {{$errors->any()? 'block': 'none' }}">
    <div class="card-body">
        <div class="alert alert-danger fade show" role="alert">{{ $errors->all()[0]?? '' }}</div>
    </div>
</div>