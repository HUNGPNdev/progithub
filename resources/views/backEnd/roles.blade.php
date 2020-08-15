@extends('backEnd.master')
@section('title','Roles')
@section('main')
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" ng-app="role" ng-controller="roleController">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Roles</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-4 col-lg-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Add Roles
					</div>
					<div class="panel-body">
						<form action="{{route('admin.roles.store')}}" method="post">
							<div class="form-group">
								<label>Name Role:</label>
								<input type="text" name="name" required class="form-control" placeholder="Name roles...">
							</div>
								<label>Routes</label>
								<input type="text" class="" ng-model="rname" placeholder="Search routes...">
							<div class="form-group"  style="height: 300px; overflow-y: auto;">
								<div class="checkbox" ng-repeat="r in roles | filter : rname">
									<label>
										<input type="checkbox" class="item" name="route[]" value="@{{r}}"> @{{r}}
									</label>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-primary" value="Submit">
								<label>
									<input type="checkbox" id="checkall"> Checkall
								</label>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8 col-lg-8">
				<div class="panel panel-primary">
					<div class="panel-heading">List Roles</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							@include('errors.note')
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>roles_id</th>
					                  <th>name</th>
					                  <th>permission</th>
					                  <th >Option</th>
					                </tr>
				              	</thead>
				              	<tbody>
									@foreach($data as $data)
									<tr>
										<td>{{$data->id}}</td>
										<td>{{$data->name}}</td>
										<td>
										<button data-toggle="collapse" data-target="#demo{{$data->id}}">...</button>
										<div id="demo{{$data->id}}" class="collapse">
											@php
												$decode = json_decode($data->permission);
											@endphp
											@if($decode != "")
												@foreach($decode as $d)
													{{$d}}<br>
												@endforeach
											@endif
										</div>
										</td>
										<td>
											<a href="{{ route('admin.roles.edit',$data->id) }}" class="btn btn-primary">Edit</a>
											<a href="{{ route('admin.roles.delete',$data->id) }}" class="btn btn-danger">Delete</a>
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
@section('angular')
	<script src="js/angular.min.js"></script>
	<script type="text/javascript">
		var app = angular.module('role',[]);

		app.controller('roleController', function($scope){
			var roles = ' <?php echo json_encode($route); ?> ';
			$scope.roles = angular.fromJson(roles);
		});
		$('#checkall').click(function(){
			$(".item").prop('checked', $(this).prop('checked'));
		});
	</script>
@stop