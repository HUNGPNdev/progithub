@extends('backEnd.master')
@section('title','Banner')
@section('main')
<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Banner</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">List Banner</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Name Page</th>
										<th>Image</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $d)
									<tr>
										<td><b>{{$d->banner_id}}</b></td>
										<td><b>{{$d->banner_name}}</b></td>
										<td>
											<img width="300px" style="margin: 0;" src="{{asset('storage/app/image/'.$d->banner_img)}}" class="thumbnail img-fluid">
										</td>
										<td>
											<a href="{{ route('admin.banner.edit',$d->banner_id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
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