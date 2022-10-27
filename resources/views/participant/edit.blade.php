






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
  <div class="card-header">participants Page</div>
  <div class="card-body">
      
      <form action="{{ url('participant/' .$participant->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$participant->id}}" id="id" />
        <label>nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$participant->nom}}" class="form-control"></br>
        <label>prenom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$participant->prenom}}" class="form-control"></br>
        <label>age</label></br>
        <input type="text" name="age" id="age" value="{{$participant->age}}" class="form-control"></br>
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
