


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

   <div class="container">
       <div class="row">
           <div class="col-md-9">
               <div class="card">
                   <div class="card-header">Zones Vertes</div>
                   <div class="card-body">
      
      <form action="{{ url('participant') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>nom</label></br>
        <!-- @error('nomZone')
   <span class="text-danger">{{$message}}</span>
@enderror -->
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>prenom</label></br>
        <!-- @error('surfaceZone')
   <span class="text-danger">{{$message}}</span>
@enderror -->
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>age</label></br>
        <!-- @error('Gouvernorat')
   <span class="text-danger">{{$message}}</span>
@enderror -->
        <input type="text" name="age" id="age" class="form-control"></br>


        <div class="form-group">
                <label for="exampleInputEmail1"> Photo:</label>
                <!-- @error('photo')
   <span class="text-danger">{{$message}}</span>
@enderror -->
                <input type="file" class="form-control" name="photo">
              
            </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
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
