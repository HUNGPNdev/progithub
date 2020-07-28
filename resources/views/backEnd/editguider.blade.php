@extends('backEnd.master')
@section('title','Home')
@section('main')
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class=" col-lg-12 col-md-12 col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Add Tour Guider
						</div>
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data">
								@include('errors.note')
								<div class="form-group">
									<label>Name Guider:</label>
									<input type="text" name="name" required class="form-control" value="{{$guider->guider_name}}" placeholder="Name Guider...">
								</div>
								<div class="form-group" >
									<label>Status</label><br>
									Active: <input type="radio" name="status" value="1"  @if($guider->status==1) checked @endif >
									Missed: <input type="radio" name="status" value="0" @if($guider->status==0) checked @endif >
								</div>
								<div class="form-group" >
									<label>Tour Images</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="100px" src="{{asset('storage/app/image/'.$guider->images)}}">
								</div>
								<div class="form-group">
									<label>facebook:</label>
									<input type="text" name="facebook" class="form-control" value="{{$guider->facebook}}" placeholder="link facebook...">
								</div>
								<div class="form-group">
									<label>twiter:</label>
									<input type="text" name="twiter" class="form-control" value="{{$guider->twiter}}" placeholder="link twiter...">
								</div>
								<div class="form-group">
									<label>instagram:</label>
									<input type="text" name="instagram" class="form-control" value="{{$guider->instagram}}" placeholder="link instagram...">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary" value="Submit"><br><br>
									<a href="{{asset('admin/guider')}}" class="form-control btn btn-danger">Cancel</a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop