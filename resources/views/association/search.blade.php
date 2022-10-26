@extends('layouts')
@section('content')
<div class="table-responsive">
                           <table class="table">
                               <thead>
                                   <tr>
                                   <th>#</th>
                                        <th>Name</th>
                                        <th>Numero</th>
                                        <th>Adresse</th>
                                        <th> Description</th>
                                        <th>Actions</th>
                                    </tr>
</ul>
                                </thead>
                                <tbody>
                                @foreach($association as $item)
                                    <tr>
                                        <th scope="row"> {{$association->id}}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->numero }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td style="display:flex">

                                       <td>
                                       <a href="{{ url('/association/' . $item->id) }}" title="View association"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/association/' . $item->id . '/edit') }}" title="Edit association"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/association' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>
@endsection