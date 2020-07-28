@extends('backEnd.master')
@section('title','Home')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Destination</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Add Destination
						</div>
						<div class="panel-body">
							<form action="" method="post">
								@include('errors.note')
								<div class="form-group">
									<label>Name Destination:</label>
									<input type="text" name="name" class="form-control" value="{{$data->pac_name}}" placeholder="Name Destination...">
								</div>
								<div class="form-group" >
									<label>Status</label><br>
									Active: <input type="radio" name="status" value="1" @if($data->status==1) checked @endif>
									Missed: <input type="radio" name="status" value="0" @if($data->status==0) checked @endif>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary" value="Submit"><br><br>
									<a href="{{asset('admin/packages')}}" class="form-control btn btn-danger">Cancel</a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop