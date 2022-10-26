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
        <h5 class="card-title">Name : {{ $association->name }}</h5>
        <h5 class="card-title">Numero : {{ $association->numero }}</h5>
        <p class="card-text">Adresse : {{ $association->adresse }}</p>
        <p class="card-text">Description : {{ $association->description }}</p>
  </div>
     
       
    </hr>
    </div>


<a href="{{ URL::to('/association/pdf',$association->id)}}" class="btn btn-warning">
        <i class="fas fa-file-pdf"></i>
        telecharger <b>PDF</b>
</div>
@endsection