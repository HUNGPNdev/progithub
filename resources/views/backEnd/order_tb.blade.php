@extends('backEnd.master')
@section('title','Tours')
@section('main')
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Question</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List Question</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@include('errors.note')
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>address</th>
											<th>departure</th>
											<th>tour_name</th>
											<th>destination</th>
											<th>adults</th>
											<th>children</th>
											<th>Air Frares</th>
											<th>total</th>
											<th>tour_price</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									@foreach($order as $q)
										<tr>
											<td>{{$q->id}}</td>
											<td>{{$q->name}}</td>
											<td>{{$q->email}}</td>
											<td>{{$q->phone}}</td>
											<td>{{$q->address}}</td>
											<td>{{$q->departure}}</td>
											<td>{{$q->tour_name}}</td>
											<td>{{$q->destination}}</td>
											<td>{{$q->adults}}</td>
											<td>{{$q->children}}</td>
											<td>{{$q->package}}</td>
											<td>{{$q->total}}</td>
											<td>{{$q->tour_price}}</td>
											<td><a href="{{route('admin.deleteorder',$q->id)}}" class="btn btn-danger">Xóa</a></td>
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