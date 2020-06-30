@extends('admin.customerlayout')

@section('form')
   <div class="container">
        <x-history.jiwangshi-show :data="$user->history"/>
        <x-history.diet-show :data="$user->history" />
        <x-history.usage-show :data="$user->history"/> 
        <div class="row">
           <div class="col-sm">
           <a class="mb-2 mt-2 mr-2 btn-transition btn btn-outline-focus" href="{{route('admin.customer.edit', ['customer' => $user->id, 'section' => 'history'])}}">编辑</a>
           </div>
        </div>
   </div>
  
@endsection