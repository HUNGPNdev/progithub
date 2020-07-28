@extends('backEnd.master')
@section('title','Edit Admin')
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
                    <div class="panel-body">
                        <div class="bootstrap-table">
                        	<div class="table-responsive">
                        		<div class="panel panel-primary">
                        			<div class="panel-heading">Edit Admin</div>
                        			<div class="panel-body">
                                        @if($errors->count())
                                            @foreach($errors as $error)
                                                <p>{{$error}}</p>
                                            @endforeach
                                        @endif
                        				<form action="{{route('admin.listadmin.update',$listadmin->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        					@csrf @method('PUT')
                        					<div class="row">
                        						<div class="col-md-6">
                        							<div class="form-group">
                        								<label for="">Email</label>
                        								<input type="text" class="form-control" name="email" value="{{$listadmin->email}}" placeholder="input email">
                                                        @error('email')<p style="color: red;">{{ $message }}</p>@enderror
                        							</div>
                        							<div class="form-group">
                        								<label for="">Password</label>
                        								<input type="text" class="form-control" name="password" value="" placeholder="input new password">
                                                        @error('password')<p style="color: red;">{{ $message }}</p>@enderror
                        							</div>
                                                    <div class="form-group">
                                                        <label for="">Confirm password</label>
                                                        <input type="text" class="form-control" name="conf_pas" value="" placeholder="input new password">
                                                        @error('conf_pas')<p style="color: red;">{{ $message }}</p>@enderror
                                                    </div>
                        							<div class="form-group">
                        								<label for="">Name</label>
                        								<input type="text" class="form-control" name="name" value="{{$listadmin->name}}" placeholder="input name">
                                                        @error('name')<p style="color: red;">{{ $message }}</p>@enderror
                        							</div>
                        							<div class="form-group">
                        								<label for="">Phone</label>
                        								<input type="number" class="form-control" name="phone" value="{{$listadmin->phone}}" placeholder="input phone">
                        							</div>
                        							<div class="form-group">
                        								<label for="">Address</label>
                        								<input type="text" class="form-control" name="address" value="{{$listadmin->address}}" placeholder="input address">
                        							</div>
                        							<div class="form-group">
                        								<label for="">Birthday</label>
                        								<input type="date" class="form-control" name="birthday" value="{{$listadmin->birthday}}" placeholder="input birthday">
                        							</div>
                        							<div class="form-group">
                        								<label for="">Gender</label><br>
                        								Male: <input  type="radio" name="gender" value="1" @if($listadmin->status == 1) checked @endif>
                        								Female: <input type="radio" name="gender" value="0" @if($listadmin->status == 0) checked @endif>
                        							</div>
                        							<div class="form-group" >
                        								<label>Admin Images</label>
                        								<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        								<img id="avatar" class="thumbnail" width="100px" src="@if($listadmin->image == '') img/new_seo-10-512.png @else {{asset('storage/app/admin/'.$listadmin->image)}} @endif">
                        							</div>
                        							<div class="form-group" >
                        								<label>Status</label><br>
                        								Active: <input  type="radio" name="status" value="1" @if($listadmin->status == 1) checked @endif>
                        								Missed: <input type="radio" name="status" value="0" @if($listadmin->status == 0) checked @endif>
                        							</div>
                        						</div>
                        						<div class="col-md-1"></div>
                        						<div class="col-md-5">
                        							<div class="form-group">
                        								<h2><b>Roles</b></h2>
                        								<div class="checkbox">
                                                            @foreach($roles as $role)
                        										  <input type="checkbox" name="role[]"  value="{{$role->id}}"  {{($role->add_role) ? "checked" : ""}}>{{$role->name}}<br>
                        									@endforeach
                        								</div>
                        							</div>
                        						</div>
                        					</div>
                        					<button type="submit" class="btn btn-primary">Submit</button>
                        				</form>
                        			</div>
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