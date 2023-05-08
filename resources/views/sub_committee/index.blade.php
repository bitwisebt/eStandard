@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @if (session('success'))
            <div class="col-sm-10">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
        @endif
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                     Sub Committee List
                </div>
                    <div class="card-body">
                    <a class="btn btn-success btn-sm" href="{{route('sub-committee.create')}}"><i class="fa fa-plus"></i> Add New</a>
                    @if(count($sub)>0)
                    <br><br>                  
                    <div class="table-responsive">
                        <table id="myTable" class="table border table-sm">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Technical Committee</th>
                                    <th>Sub Comittee</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($sub as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->technical_committee}}</td>
                                <td>{{$data->sub_committee}}</td> 
                                <td>{{$data->price}}</td> 
                                <td>{{$data->status=='Y'?'Active':'Discontinue'}}</td>  
                                <td>
                                    <a class="btn btn-sm btn-info text-white" href="{{url('/sub-committee/'.$data->id.'/edit')}}">
                                    <i class="fa fa-edit" aria-hidden="true"> </i></a>
                                    &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#remove{{$data->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <!-- Remove Role -->
                                    <div class="modal fade" id="remove{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="removeTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-center" id="removeTitle">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                Are you sure you want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                <a class="btn btn-sm btn-danger text-white"  href="{{url('/sub-committee/delete/'.$data->id)}}"> Yes </a>
                                                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>             
                            </tr>
                            @endforeach 
                            @else
                            <p class="text-center">No Sub Committee to display.</p>
                            @endif
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

