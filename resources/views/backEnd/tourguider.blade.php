@extends('backEnd.master')
@section('title','Home')
@section('main')
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Tour guider</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Add Tour Guider
						</div>
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data">
								@include('errors.note')
								<div class="form-group">
									<label>Name Guider:</label>
									<input type="text" name="name" required class="form-control" placeholder="Name Guider...">
								</div>
								<div class="form-group" >
									<label>Status</label><br>
									Active: <input type="radio" name="status" value="1">
									Missed: <input type="radio" checked name="status" value="0">
								</div>
								<div class="form-group" >
									<label>Tour Images</label>
									<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="100px" src="img/new_seo-10-512.png">
								</div>
								<div class="form-group">
									<label>facebook:</label>
									<input type="text" name="facebook" class="form-control" placeholder="link facebook...">
								</div>
								<div class="form-group">
									<label>twiter:</label>
									<input type="text" name="twiter" class="form-control" placeholder="link twiter...">
								</div>
								<div class="form-group">
									<label>instagram:</label>
									<input type="text" name="instagram" class="form-control" placeholder="link instagram...">
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
					<div class="panel-heading">List Tour guider</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Name Guider</th>
					                  <th>status</th>
					                  <th>Image</th>
					                  <th>Facebook</th>
					                  <th>Twitter</th>
					                  <th>Instagram</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($guider as $guider)
								<tr>
									<td>{{$guider->guider_name}}</td>
									<td>{{$guider->status}}</td>
									<td>
										<img width="100px" src="{{asset('storage/app/image/'.$guider->images)}}" alt="">
									</td>
									<td>{{$guider->facebook}}</td>
									<td>{{$guider->twiter}}</td>
									<td>{{$guider->instagram}}</td>
									<td>
			                    		<a href="{{asset('admin/guider/edit/'.$guider->guider_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('admin/guider/delete/'.$guider->guider_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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