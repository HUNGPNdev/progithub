@extends('backEnd.master')
@section('title','Add Slider')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Slider</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Add Slider</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						@include('errors.note')
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Name Slider</label>
									<input required type="text" name="name" class="form-control">
								</div>
								<div class="form-group" >
									<label>Slider Images</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="100px" src="img/new_seo-10-512.png">
								</div>
								<div class="form-group" >
									<label>Description</label>
									<textarea class="ckeditor" name="description"></textarea>
								</div>
								<div class="form-group" >
									<label>Status</label><br>
									Active: <input  type="radio" name="status" value="1">
									Missed: <input type="radio" name="status" value="0">
								</div>
								<script type="text/javascript">
									var editor = CKEDITOR.replace('description',{
										language:'vi',
										filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?Type=Images',
										filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?Type=Flash',
										filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
										filebrowserFlashUploadUrl: '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
									});
								</script>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{ route('admin.slider') }}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>	
@stop