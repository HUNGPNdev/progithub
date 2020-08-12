@extends('backEnd.master')
@section('title','Slider Customer')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Slider Customer</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">List Slider</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{ route('admin.sliCus.add') }}" class="btn btn-primary btn-lg">Add Slider</a>
							@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
							@endif
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Name Customer</th>	
										<th>Image</th>
										<th>Description</th>
										<th>Status</th>
										<th>Options</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $d)
									<tr>
										<td>{{$d->slider_id}}</td>
										<td>{{$d->slider_customer}}</td>
										<td>
											<img width="300px" style="margin: 0;" src="{{asset('storage/app/image.slider/'.$d->slider_img)}}" class="thumbnail img-fluid">
										</td>
										<td>{!!$d->slider_description!!}</td>
										<td>
											<?php 
											if($d->slider_status == 0){
												?>
												<a href="{{ route('admin.sliCus.active',$d->slider_id)}}"><span class="fa-thumbs-styling fas fa-thumbs-down"></span></a>
												<?php 
											} else{
												?>
												<a href="{{ route('admin.sliCus.unactive',$d->slider_id)}}"><span class="fa-thumbs-styling fas fa-thumbs-up"></span></a>
												<?php 
											}
											?>
										</td>
										<td>
											<a href="{{ route('admin.sliCus.edit',$d->slider_id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>  Sửa</a>
											<a href="{{ route('admin.sliCus.delete',$d->slider_id) }}" onclick="return confirm('Do you sure delete')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a><br><br>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>	
@stop()