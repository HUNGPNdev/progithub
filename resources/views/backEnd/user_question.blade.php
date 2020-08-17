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
											<th>Question</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									@foreach($question as $q)
										<tr>
											<td>{{$q->id}}</td>
											<td>{{$q->name}}</td>
											<td>{{$q->email}}</td>
											<td>{{$q->phone}}</td>
											<td width="45%">{{$q->question}}</td>
											<td><a href="{{route('admin.deletequestion',$q->id)}}" class="btn btn-danger">Xóa</a></td>
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