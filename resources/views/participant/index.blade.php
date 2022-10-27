


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
                    <div class="card-header">adherents</div>
                    <div class="card-body">
                        <a href="{{ url('/participant/create') }}" class="btn btn-success btn-sm" title="Add New adherent">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <form action="" class="col-9">
        <div class="form-group">
          <input type="search" name="search" id="" class="form-control" placeholder="search by name " value="{{$search}}"/>
        </div>
        <button class="btn btn-primary">Search</button>
  <a href="{{url('/participant')}}">
  <button class="btn btn-primary" type="button">reset</button>
</a>
    </form>
                        <div class="table-responsive">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>nom</th>
                                        <th>prenom</th>
                                        <th>age</th>
                                       
                                        <!-- <th>Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach( $participant as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->age }}</td>
                                     <!-- <td>   <img src="{{ $item->photo }}" > </td> -->

                                        <td>
                                            <a href="{{ url('/participant/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/participant/' . $item->id . '/edit') }}" title="Edit Zone"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/participant' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete participant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
