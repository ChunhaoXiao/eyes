@extends('admin.layout')
@section('nav')
    <h3>数据统计</h3>
@endsection
@section('content')
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script> 
  <x-analystics.summery />   
  
  <x-analystics.shopranking/>
  <x-analystics.source/>
@endsection