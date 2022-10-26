

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
       <h5 class="card-title">Name et Prenom : {{ $adherents->nom }}  {{ $adherents->prenom }}</h5>
        <p class="card-text">Addresse : {{ $adherents->addresse }}</p>
        <p class="card-text">Numero ADH : {{ $adherents->num_adherent }}</p>
        <p class="card-text">Telephone : {{ $adherents->telphone }}</p>
        <p class="card-text">Sexe : {{ $adherents->sexe }}</p>
        <p class="card-text">Date de naissance : {{ $adherents->date_naissance }}</p>
        <p class="card-text">Ville : {{ $adherents->ville }}</p>
  </div>
     
       
    </hr>
    </div>


<a href="{{ URL::to('/adherent/pdf',$adherents->id)}}" class="btn btn-warning">
        <i class="fas fa-file-pdf"></i>
        telecharger <b>PDF</b>
</div>
@endsection


