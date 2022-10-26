
@extends('layouts.app')



@section('styles')

@endsection



@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
       
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Starter Page</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
           
   



   <!-- MAIN CONTENT -->
   <div class="card">
  <div class="card-header">adherentus Page</div>
  <div class="card-body">
      
      <form action="{{ url('adherent') }}" method="post">
        {!! csrf_field() !!}
        <label>Numero ADH</label></br>
        <input type="text" name="num_adherent" id="num_adherent" class="form-control"></br>
        <label>Nome</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>Sexe</label></br>
        <input type="text" name="sexe" id="sexe" class="form-control"></br>
        <label>Date de naissance</label></br>
        <input type="date" name="date_naissance" id="date_naissance" class="form-control"></br>
        <label>Addresse</label></br>
        <input type="text" name="addresse" id="addresse" class="form-control"></br>
        <label>Ville</label></br>
        <input type="text" name="ville" id="ville" class="form-control"></br>
        
        <label>Telphone</label></br>
        <input type="text" name="telphone" id="telphone" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div

         <!-- END MAIN CONTENT -->





 </div>
 <!-- /.content-wrapper -->
@endsection

@section('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>

@endsection
