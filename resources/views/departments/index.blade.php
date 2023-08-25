@extends('layout')
@section('content')
    <div class="row">
     <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="square">

        <a href="{{ route('departments.details', ['name' => 'CS']) }}"><button type="button" class="btn btn-outline-secondary">CS</button></a>
        <div class="row">
        <i class="fas fa-desktop"></i>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="square">
        <a href="{{ route('departments.details', ['name' => 'SE']) }}">
        <button type="button" class="btn btn-outline-secondary">SE</button>
        </a>
        <div class="row">
        <i class="fas fa-laptop-code"></i>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="square">
          <a href="{{ route('departments.details', ['name' => 'AR']) }}">
          <button type="button" class="btn btn-outline-secondary">Architecture</button>
          </a>
        <div class="row">
        <i class="fas fa-building"></i>
        </div>    
    </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="square">
        <a href="{{ route('departments.details', ['name' => 'BA']) }}">
        <button type="button" class="btn btn-outline-secondary">BBA</button>
        </a>
        <div class="row">
        <i class="fas fa-briefcase"></i>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="square">
        <a href="{{ route('departments.details', ['name' => 'PH']) }}">
        <button type="button" class="btn btn-outline-secondary">Physics</button>
        </a>
        <div class="row">
        <i class="fas fa-apple-alt"></i>
        </div>    
    </div>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="square">
        <a href="{{ route('departments.details', ['name' => 'MT']) }}">
        <button type="button" class="btn btn-outline-secondary">Maths</button>
        </a>
        <div class="row">
        <i class="fas fa-infinity"></i>
        </div>    
        </div>
      </div>
    </div>
 

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  @endsection
<style>
  .square {
      background-color: white;
      height: 150px;
      margin: 20px;
      border-radius: 5px;
      text-align: center;
      cursor: pointer;
      
    }
    .btn{
        margin:10px;
    }
    i{
        padding-top:10px;
        font-size:3rem;
        color:#003f7d;
    }
</style>