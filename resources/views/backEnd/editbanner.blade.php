@extends('backEnd.master')
@section('title','Edit Banner')
@section('main')
<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edit Banner</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-md-6 col-lg-6">
			<div class="panel-body">
					@include('errors.note')
					<form method="post" enctype="multipart/form-data" action="{{ route('admin.banner.update',$data->banner_id) }}">
						@method('PUT')
						<div class="form-group">
							<label>Name Page:</label>
							<input type="text" name="name" class="form-control" value="{{$data->banner_name}}" readonly>
						</div>
						<div class="form-group">
							<label>Banner:</label>
							<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
							<img id="avatar" class="thumbnail" width="300px" src="{{asset('storage/app/image/'.$data->banner_img)}}">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa">
						</div>
						<div class="form-group">
							<a href="{{ route('admin.banner.index') }}" name="cancel" class="form-control btn btn-danger">Hủy bỏ</a>
						</div>
						{{csrf_field()}}
					</form>
				</div>
		</div>
	</div>
</div>	
@stop()