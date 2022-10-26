


@extends('layouts.app')

@section('content')
<div class="row justify-content-center">       
        <div class="row">
            <div class="col-md-20">
              
                <div class="card mx-auto" >
                    <div class="card-header">ZoneVertes</div>
                    <div class="card-body">
                      
                        <br/>
                        <br/>
                        <div class="table-responsive">
              
<div class="card">
  <div class="card-header">Details</div>
  <div class="card-body">
   
 

  <div class="card-body">
                <img src="{{asset('image/zoneVertes/1666721734jpg' )}}" class="img-fluid" alt="" style="width:30%;height:200px;padding:10px;">
        <h5 class="card-title">nomZone : {{ $ZoneVertes->nomZone }}</h5>
        <p class="card-text">surfaceZone : {{ $ZoneVertes->surfaceZone }}</p>
        <p class="card-text">Gouvernorat : {{ $ZoneVertes->Gouvernorat }}</p>
        <h5 class="card-title">Délégation : {{ $ZoneVertes->Délégation }}</h5>
        <p class="card-text">Localité : {{ $ZoneVertes->Localité }}</p>
        <p class="card-text">PremierResponsable : {{ $ZoneVertes->PremierResponsable }}</p>
  </div> 
     















       
    </hr>
    </div>


<a href="{{ URL::to('/zoneVertes/pdf',$ZoneVertes->id)}}" class="btn btn-warning">
        <i class="fas fa-file-pdf"></i>
        telecharger <b>PDF</b>
</div>
@endsection