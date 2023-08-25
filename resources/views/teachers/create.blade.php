@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add new Teacher</div>
  <div class="card-body">
      
      <form action="{{ url('/teachers') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop