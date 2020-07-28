@extends('backEnd.master')
@section('title','Tours')
@section('main')
		
	<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Blog</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List Tours</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/blog/add')}}" class="btn btn-primary">Add Blog</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>id_ad</th>
											<th>bn_image</th>
											<th width="">images</th>
											<th>title</th>
											<th>sumary</th>
											<th>content</th>
											<th>status</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									@foreach($blog as $blog)
										<tr>
												<td>{{$blog->id}}</td>
												<td>{{$blog->id_ad}}</td>
												<td>
													<img width="150px" style="margin: 0;" src="{{asset('storage/app/blog_img/'.$blog->bn_image)}}" class="thumbnail img-fluid">
												</td>
												<td>
													<button data-toggle="collapse" class="btn-primary" data-target="#demo{{$blog->id_blog}}">...</button>

													<div id="demo{{$blog->id_blog}}" class="collapse">
														@php
															$img = json_decode($blog->images);
														@endphp
														@if($blog->images != [])
															@foreach($img as $img)
															<img width="150px" style="margin: 0;" src="{{asset('storage/app/blog_img/'.$img)}}" class="thumbnail img-fluid">
															@endforeach
														@endif
														
													</div>
												</td>
												<td>
													<button data-toggle="collapse" class="btn-primary" data-target="#title{{$blog->id_blog}}">...</button>

													<div id="title{{$blog->id_blog}}" class="collapse">
														{!!$blog->title!!}
													</div>
												</td>
												<td>
													<button data-toggle="collapse" class="btn-primary" data-target="#sumary{{$blog->id_blog}}">...</button>

													<div id="sumary{{$blog->id_blog}}" class="collapse">
														{!!$blog->sumary!!}
													</div>
												</td>
												<td>
													<button data-toggle="collapse" class="btn-primary" data-target="#content{{$blog->id_blog}}">...</button>

													<div id="content{{$blog->id_blog}}" class="collapse">
														{!!$blog->content!!}
													</div>
												</td>
												<td>{{$blog->status}}</td>
												<td>
													<a href="{{asset('admin/blog/edit/'.$blog->id_blog)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
													<a href="{{asset('admin/blog/delete/'.$blog->id_blog)}}" onclick="return confirm('Do you sure delete')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a><br><br>
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