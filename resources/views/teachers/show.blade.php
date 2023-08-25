@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teachers Detail</div>
  <div class="card-body">
   
    <div class="card-body">
        <h5 class="card-title">Name: {{ $teachers->name }}</h5>
        <p class="card-text">Subject: {{ $teachers->subject }}</p>
        <p class="card-text">Mobile: {{ $teachers->phone }}</p>
        <p class="card-text">Department: {{ $teachers->Department }}</p>
    </div>
       
    </hr>
  
  </div>
</div>
@endsection

