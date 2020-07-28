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
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Edit Roles
					</div>
					<div class="panel-body">
						<form action="{{route('admin.roles.update',$data->id)}}" method="POST">
							@method('PUT')
							@include('errors.note')
							<div class="form-group">
								<label>Name Role:</label>
								<input type="text" name="name" required class="form-control" value="{{$data->name}}" placeholder="Name roles...">
							</div>
								<label>Routes</label>
								<input type="text" class="" ng-model="rname" placeholder="Search routes...">
							<div class="form-group"  style="height: 300px; overflow-y: auto;">
								<div class="checkbox" ng-repeat="r in roles | filter : rname">
									<label>
										<input type="checkbox" class="item" ng-checked="set_checked(r)" name="route[]" value="@{{r}}"> @{{r}}
									</label>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-primary" value="Submit">
								<a href="{{route('admin.roles.index')}}" class="btn btn-danger">Cancel</a>
								<label>
									<input type="checkbox" id="checkall"> Checkall
								</label>
							</div>
							{{csrf_field()}}
						</form>
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

			var per = ' <?php echo json_encode($per); ?>'
			$scope.role = angular.fromJson(per);
			$scope.set_checked = function(r){
				for (var i = 0; i < $scope.role.length; i++) {
					if ($scope.role[i] == r) {
						return true;
					}
				}
						return false;
			}
		});
		$('#checkall').click(function(){
			$(".item").prop('checked', $(this).prop('checked'));
		});

	</script>
@stop