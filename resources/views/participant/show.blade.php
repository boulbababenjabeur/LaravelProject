


@extends('layouts.app')

@section('content')
<div class="row justify-content-center">       
        <div class="row">
            <div class="col-md-20">
              
                <div class="card mx-auto" >
                    <div class="card-header">Participants</div>
                    <div class="card-body">
                      
                        <br/>
                        <br/>
                        <div class="table-responsive">
              
<div class="card">
  <div class="card-header">Details participant</div>
  <div class="card-body">
   
 

  <div class="card-body">
                <img src="{{asset('image/zoneVertes/1666721734jpg' )}}" class="img-fluid" alt="" style="width:30%;height:200px;padding:10px;">
        <h5 class="card-title">nom : {{ $participant->nom }}</h5>
        <p class="card-text">prenom : {{ $participant->prenom }}</p>
        <p class="card-text">age : {{ $participant->age }}</p>

  </div> 
     















       
    </hr>
    </div>


<a href="{{ URL::to('/participant/pdf',$participant->id)}}" class="btn btn-warning">
        <i class="fas fa-file-pdf"></i>
        telecharger <b>PDF</b>
</div>
@endsection