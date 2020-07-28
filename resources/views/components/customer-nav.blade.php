<div class="container">
    <div class="d-flex justify-content-between mb-3">
        @foreach(App\Models\Customer::NAV as $k => $v)
          
            <a  href="{{ route('admin.customer.index', ['customer' => request()->customer, 'section' => $k])}}" class="btn {{ $k == request()->section?'btn-warning text-white' : 'btn-info' }} {{ !request()->customer && $k ? 'disabled':'' }}">{{$v}}</a>
          
        @endforeach 
    </div>
</div>