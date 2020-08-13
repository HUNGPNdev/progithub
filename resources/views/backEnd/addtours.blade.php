@extends('backEnd.master')
@section('title','Add Tours')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tours</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Add Tours</div>
					<div class="panel-body">
							<form method="post" enctype="multipart/form-data">
								@include('errors.note')
								<div class="row" style="margin-bottom:40px">
									<div class="col-xs-12 col-md-7 col-lg-7">
										<div class="form-group" >
											<label>Name Tour</label>
											<input required type="text" name="name" placeholder="tour name" class="form-control">
										</div>
										<div class="form-group" >
											<label>Destination</label>
											<select name="dest_id" class="form-control">
												@foreach($destination as $dest)
												<option value="{{$dest->dest_id}}">{{$dest->dest_name}}</option>
												@endforeach
						                    </select>
										</div>
										<div class="form-group" >
											<label>Sumary</label>
											<input type="text" class="form-control" name="sumary">
										</div>
										
										<div class="form-group" >
											<label>Description</label>
											<textarea class="ckeditor" name="description"></textarea>
										</div>
										<div class="form-group" >
											<label>Tour Images</label>
											<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
						                    <img id="avatar" class="thumbnail" width="100px" src="img/new_seo-10-512.png">
										</div>
										<div class="form-group" >
											<label>Price Tour</label>
											<input required  type="number" step="0.01" name="price" class="form-control">
										</div>
										<div class="form-group" >
											<label>Number Days</label>
											<input required type="number" name="day" class="form-control">
										</div>
										<div class="form-group" >
											<label>Maps</label>
											<input type="text" class="form-control" name="maps">
										</div>
										<div class="form-group" >
											<label>Status</label><br>
											Active: <input  type="radio" name="status" checked value="1">
											Missed: <input type="radio" name="status" value="0">
										</div>
										<div class="form-group">
											<label>Package Included</label><br>
											<div class="row">
												@foreach($package as $package)
												<div class="col-lg-6 col-md-6 col-sm-6 col-12">
													<input type="checkbox" value="{{$package->pac_id}}" name="route[]"> {{$package->pac_name}} <br>
												</div>
												@endforeach
											</div>
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
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4 panel-primary">
										<div class="panel-heading">Travel type | Airfares </div><br><br>
										<section style="margin-left: 20px;">
											<div class="form-group" >
												<label>Price First Class: </label>
												<input type="number" name="first" placeholder="Price First $" class="form-control">
											</div>
											<div class="form-group" >
												<label>Business Class: </label>
												<input type="number" name="business" placeholder="Business $" class="form-control">
											</div>
											<div class="form-group" >
												<label>Premium Class: </label>
												<input type="number" name="premium" placeholder="Premium $" class="form-control">
											</div>
											<div class="form-group" >
												<label>Economy Class: </label>
												<input type="number" name="economy" placeholder="Economy $" class="form-control">
											</div>
										</section>
									</div>
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{route('admin.tours')}}" class="btn btn-danger">Hủy bỏ</a>
								{{csrf_field()}}
							</form>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop