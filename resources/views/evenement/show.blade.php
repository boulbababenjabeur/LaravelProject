

@extends('layouts.app')

@section('content')
<div class="row justify-content-center">       
        <div class="row">
            <div class="col-md-20">
              
                <div class="card mx-auto" >
                    <div class="card-header">association</div>
                    <div class="card-body">
                      
                        <br/>
                        <br/>
                        <div class="table-responsive">
              
<div class="card">
  <div class="card-header">Details</div>
  <div class="card-body">
   
 
  <div class="card-body">
  <img src="{{asset('image/evenement/1666723338png' )}}" class="img-fluid" alt="" style="width:30%;height:200px;padding:10px;">

        <h5 class="card-title">Name : {{ $evenement->name }}</h5>
        <p class="card-text">description : {{ $evenement->description }}</p>
        <p class="card-text">Start Date : {{ $evenement->startDate }}</p>
  </div>
     
       
    </hr>
    </div>


<a href="{{ URL::to('/evenement/pdf',$evenement->id)}}" class="btn btn-warning">
        <i class="fas fa-file-pdf"></i>
        telecharger <b>PDF</b>
</div>
@endsection