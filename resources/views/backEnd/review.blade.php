@extends('backEnd.master')
@section('title','Review')
@section('main')
<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Review</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">List Review</div>
        <div class="panel-body">
          @include('errors.note')
          <div class="bootstrap-table">
            <div class="table-responsive">
              <table class="table table-bordered" style="margin-top:20px;">               
                <thead>
                  <tr id="tbl-first-row">
                   <td>ID</td>
                   <td>User</td>
                   <td>Tour</td>
                   <td>Review</td>
                   <td>Services</td>
                   <td>Rooms</td>
                   <td>Hospitality</td>
                   <td>Comfort</td>
                   <td>Cleanliness</td>
                   <td>Satisfaction</td>
                   <td>Average</td>
                   <td>Status</td>
                   <td>Option</td>
                 </tr>
               </thead>
               <tbody>
                @foreach($review as $r)
                <tr>
                 <td>{{$r->review_id}}</td>
                 <td>{{$r->name}}</td>
                 <td>{{$r->tour_id}}</td>
                 <td>{{$r->review_cmt}}</td>
                 <td>{{$r->services}} *</td>
                 <td>{{$r->rooms}} *</td>
                 <td>{{$r->hospitality}} *</td>
                 <td>{{$r->comfort}} *</td>
                 <td>{{$r->cleanliness}} *</td>
                 <td>{{$r->satisfaction}} *</td>
                 <td>{{$r->avg}} *</td>
                 <td>
                  <?php 
                  if($r->review_status == 0){
                    ?>
                    <a href="{{ route('admin.adminReview.active',$r->review_id)}}"><span class="fa-thumbs-styling fas fa-thumbs-down"></span></a>
                    <?php 
                  } else{
                    ?>
                    <a href="{{ route('admin.adminReview.unactive',$r->review_id)}}"><span class="fa-thumbs-styling fas fa-thumbs-up"></span></a>
                    <?php 
                  }
                  ?>
                </td>
                <td>
                  <a href="{{ route('admin.adminReview.delete',$r->review_id) }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody> 
          </table>  
          <div class="panel-footer">
            {{ $review->links() }}
          </div>                     
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</div>
</div>
@stop