@foreach($data as $tours)
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    @csrf
    <div class="des-cov-1">
        <div class="des-img-1">
            <a href="{{asset('user/tour/tourdetail/'.$tours->tour_id)}}"><img height="256px" src="{{asset('storage/app/image/'.$tours->tour_image)}}" alt="img"></a>
        </div>
        <div class="des-para">
            <div class="dayt">
                <h6><a href="{{asset('user/tour/tourdetail/'.$tours->tour_id)}}">{{$tours->tour_name}}</a></h6>
                <p>{{$tours->tour_day }}Days | {{number_format($tours->tour_price,2,'.',' ' )}}$</p>
            </div>
            <div class="real-dat-para">
                <p style="height: 70px; overflow: hidden;">
                    {{$tours->tour_sumary}}
                </p>
            </div>
            <div class="des-button-icon">
                <div class="das-into-btn">
                    <a data-id="{{$tours->tour_id}}" data-price="{{$tours->tour_price}}" data-first="{{$tours->first}}"  data-business="{{$tours->business}}"  data-premium="{{$tours->premium}}"  data-economy="{{$tours->economy}}"  class="btn btn-3 book-tour" style="color: #fff" data-toggle="modal" data-target="#myModal">Book Now</a>
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
<div class="modal fade hais" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <div class="model-details">
                    <h5>Travel Booking Form</h5>
                    <div class="mdel-form">
                        <form action="{{route('cart.booking')}}" role="form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">First name</label>
                                <input type="text" class="form-control" name="name" required placeholder="Full Name" id="name" />
                            </div>
                            <div class="form-group">
                                <label for="last-name">Email: </label>
                                <input type="email" class="form-control" placeholder="email" required name="email" id="email" />
                            </div>
                            <div class="form-group">
                                <label for="last-name"> Phone: </label>
                                <input type="number" class="form-control" placeholder="phone" required name="phone" id="phone" />
                            </div>
                            <div class="form-group">
                                <label for="last-name">Address: </label>
                                <input type="text" class="form-control" placeholder="address" name="address" id="address" />
                            </div>
                            <div class="form-group">
                                <label for="departure">Departure Date: </label>
                                <input type="date" class="form-control" name="departure" id="departure" />
                            </div>
                            <div class="form-group">
                                <label for="children">Children under 2 year old: </label>
                                <input type="number" class="form-control" placeholder="Number of children" name="children" id="children" />
                            </div>
                            <div class="form-group">
                                <label for="adults">Adults: </label>
                                <input type="number" class="form-control" name="adults" placeholder="Number of adults" id="adults" />
                            </div>
                            <div class="travel-tyepe row">
                                <div class="flex-type col-lg-3">
                                    <label for="text">Travel Type: </label>
                                </div>
                                <div class="flex-type col-lg-9">
                                    <label>
                                        <input type="radio" id="tour-first" name="package" value=""> First Class
                                    </label>
                                    <label>
                                        <input type="radio" id="tour-business" name="package" value=""> Business Class
                                    </label><br>
                                    <label>
                                        <input type="radio" id="tour-premium" name="package" value=""> Premium Class
                                    </label>
                                    <label>
                                        <input type="radio" id="tour-economy" name="package" value=""> Economy Class
                                    </label>
                                    <label>
                                        <input type="radio" id="package" name="package" checked value="0"> Self-sufficient
                                    </label>
                                    <input  type="text" name="tour_price" hidden="hidden" value="" id="tour-price">
                                    <input  type="text" name="tour_id" hidden="hidden" value="" id="tour-id">
                                </div>
                            </div>
                            <div class="col-lg-9 sub-travel-tyepe">
                            </div><br><br>
                            <div style="color: orange;">
                                <label for="">Total: </label>
                                <span id="total"></span>
                            </div>
                            <div class="sunb-btn-mod">
                                @if(Auth::guard("users_tb")->check())
                                <button class="btn btn-3 widet-2" type="submit">BOOKING NOW</button>
                                @else
                                <span style="margin-left: 111px;color: red;">You need login befor Booking tour!</span><br><br>
                                <a class="btn btn-3 widet-2" style="color: #fff">BOOKING NOW</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-5 col-md-5"></div>
<div style="margin-top: 20px" class="col-lg-7 col-md-7">
    {!!$data->links()!!}
</div>
@section('tourjs')
<script type="text/javascript">
    $(document).ready(function (argument) {
        $(".book-tour").click(function () {
            var _id = $(this).data("id");
            var price = $(this).data("price");
            var first = $(this).data("first");
            var business = $(this).data("business");
            var premium = $(this).data("premium");
            var economy = $(this).data("economy");
            $("#tour-price").val(parseInt(price));
            $("#tour-first").val(parseInt(first));
            $("#tour-business").val(parseInt(business));
            $("#tour-premium").val(parseInt(premium));
            $("#tour-economy").val(parseInt(economy));
            $("#tour-id").val(parseInt(_id));

            $('input[type=radio][name=package]').change(function() {
                var _adult = $('input[type=number][name=adults]').val();
                var _children = $('input[type=number][name=children]').val();
                var _package = parseInt($(this).val());
                var _total = price * _adult + _package * _adult + price*0.1* _children + _package*0.1 * _children;
                $('#total').html('<span>'+_total.toPrecision(3)+' $</span>');
            });

            $('input[name=children]').change(function() {
                var _children = $(this).val();
                var _adult = $('input[type=number][name=adults]').val();
                var _package =  $('input[name=package]:checked').val();
                var _total = price * _adult + _package * _adult + price*0.1 * _children + _package*0.1 * _children;
                $('#total').html('<span>'+_total.toPrecision(3)+' $</span>');
            });

            $('input[type=number][name=adults]').change(function() {
                var _adult = $(this).val();
                var _package =  $('input[name=package]:checked').val();
                var _children = $('input[type=number][name=children]').val();
                var _total = price * _adult + _package * _adult + price*0.1* _children + _package*0.1 * _children;
                $('#total').html('<span>'+_total+' $</span>');
            });
        });
    });
</script> 
@stop