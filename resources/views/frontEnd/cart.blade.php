<div class="modal fade bd-example-modal-lg" id="myModalCart" role="dialog" >
    <div class="modal-dialog" style="max-width: 1300px;">
        <div class="modal-content">
            <div class="modal-body" style="background: #a8a2a2  ;color: #fff">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <div class="model-details">
                    <h5>Your Booked Tour</h5>
                    <?php 
                    $stt = 1;
                    ?>
                    <table class="table table-bordered" style="margin-top:20px; overflow-y: auto; height: 300px">  
                        <thead>
                            <tr class="bg-primary">
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Departure</th>
                                <th>Tour Name</th>
                                <th>Destination</th>
                                <th>Adults</th>
                                <th>Children</th>
                                <th>Tour Price</th>
                                <th>Air Frares</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Auth::guard("users_tb")->check())
                            @if($orders->count() != 0)
                            @foreach($orders as $o)
                            <tr>
                                <td>{{$stt++}}</td>
                                <td>{{$o->name}}</td>
                                <td>{{$o->email}}</td>
                                <td>{{$o->phone}}</td>
                                <td>{{$o->address}}</td>
                                <td>{{$o->departure}}</td>
                                <td>{{$o->tour_name}}</td>
                                <td>{{$o->destination}}</td>
                                <td>{{$o->adults}}</td>
                                <td>{{$o->children}}</td>
                                <td>{{$o->tour_price}}</td>
                                <td>{{$o->package}}</td>
                                <td>{{$o->total}}</td>
                            </tr>
                            @endforeach
                            @else 
                            <tr style="text-align: center; font-size: 18px;">
                                <td colspan="13" style="color: red">You have not booked any tour yet!</td>
                            </tr>
                            @endif
                            @else
                            <tr style="text-align: center; font-size: 18px;">
                                <td colspan="13" style="color: red">You must sigin before view booked!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
