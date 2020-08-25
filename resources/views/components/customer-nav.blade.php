<div class="container">
    <div class="row pb-3">
        <div class="col-sm">
          <a href="{{route('admin.customer.create')}}" class="btn btn-outline-primary mr-3">录入客户</a>
          @if(!empty($user))
            @if($user->following == 1)  
            <button class="btn btn-outline-success">已关注</button>
            @else
            <button class="btn btn-outline-secondary">未关注</button>
            @endif
          @endif  
        </div>
    </div>
    <div class="d-flex justify-content-between mb-3">
        @foreach(App\Models\Customer::NAV as $k => $v)
          
            <a  href="{{ route('admin.customer.index', ['customer' => request()->customer, 'section' => $k])}}" class="btn {{ $k == request()->section?'btn-warning text-white' : 'btn-info' }} {{ !request()->customer && $k ? 'disabled':'' }}">{{$v}}</a>
          
        @endforeach 
        
    </div>
</div>