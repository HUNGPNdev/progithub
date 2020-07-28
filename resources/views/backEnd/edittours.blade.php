@extends('backEnd.master')
@section('title','Edit Tour')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Tour</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Name Tour</label>
										<input required type="text" name="name" value="{{$tour->tour_name}}" class="form-control">
									</div>
									<div class="form-group" >
										<label>Destination</label>
										<select required name="dest_id" class="form-control">
											@foreach($dest as $dest)
											<option value="{{$dest->dest_id}}" @if($tour->dest_id == $dest->dest_id) selected @endif>{{$dest->dest_name}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sumary</label>
										<input type="text" class="form-control" value="{{$tour->tour_sumary}}" required name="sumary">
									</div>
									<div class="form-group" >
										<label>Description</label>
										<textarea class="ckeditor" name="description">{{$tour->tour_content}}</textarea>
									</div>
									<div class="form-group" >
										<label>Tour Images</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('storage/app/image/'.$tour->tour_image)}}">
									</div>
									<div class="form-group" >
										<label>Price Tour</label>
										<input  type="number" step="0.01" name="price" value="{{$tour->tour_price}}" class="form-control">
									</div>
									<div class="form-group" >
										<label>Number Days</label>
										<input required type="number" name="day" value="{{$tour->tour_day}}" class="form-control">
									</div>
									<div class="form-group" >
										<label>Maps</label>
										<input type="text" class="form-control" name="maps">
									</div>
									<div class="form-group" >
										<label>Status</label><br>
										Active: <input  type="radio" name="status" value="1" @if($tour->status==1) checked  @endif>
										Missed: <input type="radio" name="status" value="0" @if($tour->status==0) checked  @endif>
									</div>
									<div class="form-group">
										<label>Package Included</label><br>
										<div class="row">
											@php
												$data=json_decode($tour->package);
											@endphp
											@foreach($package as $package)
											<div class="col-lg-6 col-md-6 col-sm-6 col-12">
												<input type="checkbox" value="{{$package->pac_id}}" name="route[]" @if($tour->package!=null) {{(in_array($package->pac_id ,$data)?'checked':'' ) }} @endif> {{$package->pac_name}} <br>
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
									<input type="submit" name="submit" value="Save" class="btn btn-primary">
									<a href="{{asset('admin/tours')}}" class="btn btn-danger">Cancel</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop