@extends('backEnd.master')
@section('title','List Admin')
@section('main')
    <div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Amin</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">List Admin</div>
                    <div class="panel-body">
                        <div class="alert alert-success">Added user success!</div>
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{ route('admin.listadmin.create') }}" class="btn btn-primary">Add Admin</a>
                                <table class="table table-bordered" style="margin-top:20px;">               
                                    <thead>
                                        <tr id="tbl-first-row">
                                           <td>id</td>
                                           <td>Name</td>
                                           <td>email</td>
                                           <td>phone</td>
                                           <td>address</td>
                                           <td>birthday</td>
                                           <td>gender</td>
                                           <td>image</td>
                                           <td>status</td>
                                           <td>Option</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $a)
                                        <tr>
                                           <td>{{$a->id}}</td>
                                           <td>{{$a->name}}</td>
                                           <td>{{$a->email}}</td>
                                           <td>{{$a->phone}}</td>
                                           <td>{{$a->address}}</td>
                                           <td>{{$a->birthday}}</td>
                                           <td>{{$a->gender}}</td>
                                           <td>{{$a->image}}</td>
                                           <td>{{$a->status}}</td>
                                           <td>
                                                <a href="{{ route('admin.listadmin.edit',$a->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit</a>
                                                <a href="{{ asset('admin/destroy/'.$a->id) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Delete</a>
                                            </td>
                                       </tr>
                                       @endforeach
                                    </tbody> 
                                </table>  
                                <div class="panel-footer">
                                    {{ $data->links() }}
                                </div>                     
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->
@stop