@foreach($data as $tour)
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    @csrf
    <div class="des-cov-1">
        <div class="des-img-1">
            <a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}"><img src="assets/img/tour-destanation/d-1.png" alt="img"></a>
        </div>
        <div class="des-para">
            <div class="dayt">
                <h6><a href="{{asset('user/tour/tourdetail/'.$tour->tour_id)}}">{{$tour->tour_name}}</a></h6>
                <p>{{$tour->tour_day }}Days | {{number_format($tour->tour_price,2,'.',' ' )}}$</p>
            </div>
            <div class="real-dat-para">
                <p style="height: 70px; overflow: hidden;">
                {{$tour->tour_sumary}}
            </p>
            </div>
            <div class="des-button-icon">
                <div class="das-into-btn">
                    <a href="#!" class="btn btn-3" data-toggle="modal" data-target="#myModal">Book
                    Now</a>
                </div>
                <div class="start-icon-des">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
    <div style="margin-bottom: 0px !important;margin: 20px auto ">
    {!!$data->links()!!}
    </div>