@extends('backEnd.master')
@section('title','Tour')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							<form action="" method="post">
								@include('errors.note')
								<div class="form-group">
									<label>Name Destination:</label>
									<input type="text" name="name" class="form-control" placeholder="Name Destination..." value="{{$dest->dest_name}}">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary" value="Submit">
								</div>
								<div class="form-group">
									<a href="{{asset('admin/destination')}}" name="Cancel" class="form-control btn btn-danger" >Cancel</a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop