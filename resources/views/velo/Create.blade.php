


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
                   <div class="card-header">velos</div>
                   <div class="card-body">
      
      <form action="{{ url('velo') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>nomVelo</label></br>
        <!-- @error('nomVelo')
   <span class="text-danger">{{$message}}</span>
@enderror -->
        <input type="text" name="nomVelo" id="nomVelo" class="form-control"></br>
        <label>couleur</label></br>
        <!-- @error('couleur')
   <span class="text-danger">{{$message}}</span>
@enderror -->
        <input type="text" name="couleur" id="couleur" class="form-control"></br>
        <label>type</label></br>
        <!-- @error('type')
   <span class="text-danger">{{$message}}</span>
@enderror -->
        <input type="text" name="type" id="type" class="form-control"></br>
        
       

     
      
        
      
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
