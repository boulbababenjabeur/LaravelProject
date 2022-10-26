
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
                   <div class="card-header">Association</div>
                   <div class="card-body">
      
      <form action="{{ url('association') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        @error('name')
   <span class="text-danger">{{$message}}</span>
@enderror
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"></br>
     
        <label>Numero</label></br>
        @error('numero')
   <span class="text-danger">{{$message}}</span>
@enderror
        <input type="text" name="numero" id="numero" class="form-control" value="{{ old('numero') }}"></br>
        <label>Adresse</label></br>
        @error('adresse')
   <span class="text-danger">{{$message}}</span>
@enderror
        <input type="text" name="adresse" id="adresse" class="form-control"value="{{ old('adresse') }}"></br>
        <label>Description</label></br>
        @error('description')
   <span class="text-danger">{{$message}}</span>
@enderror
        <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}"></br>
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
