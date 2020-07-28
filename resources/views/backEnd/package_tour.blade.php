@extends('backEnd.master')
@section('title','Home')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Packages</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Add Packages
					</div>
					<div class="panel-body">
						<form action="" method="post">
							@include('errors.note')
							<div class="form-group">
								<label>Name Packages:</label>
								<input required type="text" name="name" class="form-control" placeholder="Name Destination...">
							</div>
							<div class="form-group" >
								<label>Status</label><br>
								Active: <input type="radio" name="status" value="1">
								Missed: <input checked type="radio" name="status" value="0">
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" value="Submit">
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">List Packages</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>pac_id</th>
					                  <th>Name Packages</th>
					                  <th>status</th>
					                  <th style="width:30%">Option</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              	@foreach($pac as $pac)
								<tr>
									<td>{{$pac->pac_id}}</td>
									<td>{{$pac->pac_name}}</td>
									<td>{{$pac->status}}</td>
									<td>
			                    		<a href="{{asset('admin/packages/editpack/'.$pac->pac_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
			                    		<a href="{{asset('admin/packages/delete/'.$pac->pac_id)}}" onclick="return confirm('Do you sure delete?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
			                  		</td>
			                  	</tr>
			                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop