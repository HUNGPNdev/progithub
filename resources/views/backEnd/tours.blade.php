@extends('backEnd.master')
@section('title','Tours')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tours Package</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List Tours</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/tours/add')}}" class="btn btn-primary">Add Tours</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Name Tour</th>
											<th>dest_id</th>
											<th>package</th>
											<th>tour_sumary</th>
											<th>tour_content</th>
											<th width="">tour_image</th>
											<th>tour_price</th>
											<th>tour_day</th>
											<th>list_tags</th>
											<th>Maps</th>
											<th>status</th>
											<th>package</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
										@foreach($tour as $tour)
										<tr>
											<td>{{$tour->tour_id}}</td>
											<td>{{$tour->tour_name}}</td>
											<td>{{$tour->dest_id}}</td>
											<td>
												<p>
													<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$tour->tour_id}}d" aria-expanded="false" aria-controls="collapseExample">
														...
													</button>
												</p>
												<div class="collapse" id="{{$tour->tour_id}}d">
													<div class="card card-body">
														@if($tour->package != null)
															@php
																$endecode = json_decode($tour->package);
															@endphp
															@foreach($endecode as $val)
																{{ $tour->packag($val)['pac_name'] }}<br>
															@endforeach <br><br>
															<b>--không bao gồm--</b><br>
															@foreach($tour->packageall($tour->package) as $item)
																{{$item}}<br>
															@endforeach
														@endif
													</div>
												</div>
											</td>
											<td>
												<p>
													<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$tour->tour_id}}c" aria-expanded="false" aria-controls="collapseExample">
														...
													</button>
												</p>
												<div class="collapse" id="{{$tour->tour_id}}c">
													<div class="card card-body">
														{{$tour->tour_sumary}}
													</div>
												</div>
											</td>
											<td>
												<p>
													<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$tour->tour_id}}a" aria-expanded="false" aria-controls="collapseExample">
														...
													</button>
												</p>
												<div class="collapse" id="{{$tour->tour_id}}a">
													<div class="card card-body">
														{!!$tour->tour_content!!}
													</div>
												</div>
											</td>
											
											<td>
												<img width="150px" style="margin: 0;" src="{{asset('storage/app/image/'.$tour->tour_image)}}" class="thumbnail img-fluid">
											</td>
											<td>{{number_format($tour->tour_price,2,'.',' ')}}</td>
											<td>{{$tour->tour_day}}</td>
											<td>{{$tour->list_tags}}</td>
											<td>
												<p>
													<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$tour->tour_id}}b" aria-expanded="false" aria-controls="collapseExample">
														...
													</button>
												</p>
												<div class="collapse" id="{{$tour->tour_id}}b">
													<div class="card card-body">
														{{$tour->maps}}
													</div>
												</div>
											</td>
											<td>{{$tour->status}}</td>
											<td>{{$tour->package}}</td>
											<td>
												<a href="{{asset('admin/tours/edit/'.$tour->tour_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/tours/delete/'.$tour->tour_id)}}" onclick="return confirm('Do you sure delete')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a><br><br>
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
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop