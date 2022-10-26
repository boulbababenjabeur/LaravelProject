






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
  <div class="card-header">ZoneVertes Page</div>
  <div class="card-body">
      
      <form action="{{ url('zoneVertes/' .$ZoneVertes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$ZoneVertes->id}}" id="id" />
        <label>nomZone</label></br>
        <input type="text" name="nomZone" id="nomZone" value="{{$ZoneVertes->nomZone}}" class="form-control"></br>
        <label>surfaceZone</label></br>
        <input type="text" name="surfaceZone" id="surfaceZone" value="{{$ZoneVertes->surfaceZone}}" class="form-control"></br>
        <label>Gouvernorat</label></br>
        <input type="text" name="Gouvernorat" id="Gouvernorat" value="{{$ZoneVertes->Gouvernorat}}" class="form-control"></br>
        <label>Délégation</label></br>
        <input type="text" name="Délégation" id="Délégation" value="{{$ZoneVertes->Délégation}}" class="form-control"></br>
        <label>Localité</label></br>
        <input type="text" name="Localité" id="Localité" value="{{$ZoneVertes->Localité}}" class="form-control"></br>
        <label>PremierResponsable</label></br>
        <input type="text" name="PremierResponsable" id="PremierResponsable" value="{{$ZoneVertes->PremierResponsable}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
               </div>
           </div>
       </div>
   </div>

         <!-- END MAIN CONTENT -->





 </div>
 <!-- /.content-wrapper -->
@endsection

@section('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>

@endsection
