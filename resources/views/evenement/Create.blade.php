
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
  <div class="card-header">Ajouter Evenement</div>
  <div class="card-body">
      
      <form action="{{ url('evenement') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="date" name="startDate" id="startDate" class="form-control"></br>

        <select id="zonevertes_id" name="zonevertes_id" class="form-control ">
        @foreach($ZoneVertes as $i)
        <option value="{{ $i->id }}">{{ $i->nomZone }}</option>
         @endforeach
</select>
<div class="form-group">
                <label for="exampleInputEmail1"> Photo:</label>
                <input type="file" class="form-control" name="photo">
              
            </div>

        <input type="submit" value="Save" class="btn btn-success"></br>
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
