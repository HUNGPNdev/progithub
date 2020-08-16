<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\destModel;
use App\Model\ToursModel;
use Mail;

class BookingNowController extends Controller
{
    
    public function postBooking(Request $request) {
        $tour = ToursModel::where('tour_id',$request->tour_id)->orWhere('tour_id',$request->id)->join('destination_tb','destination_tb.dest_id','=','tours_tb.dest_id')->get();
        foreach ($tour as $tour) {
            $data['cart'] = ['id' => $tour->tour_id, 'name' => $tour->tour_name, 'Destination' => $tour->dest_name, 'qty' => 1, 'price' => $tour->tour_price];
        }
        $c = $data['cart'];
    	$data['info'] = $request->all();
    	$email = $request->email;
        $b =  $request->all();
        $data['total'] = $c['price']*$b['adults'] + ($c['price']*0.1)*$b['children'] + $b['package']*$b['adults'] + ($b['package']*0.1)*$b['children'];
    	Mail::send('frontEnd.email', $data, function ($message) use($b) {
    	    $message->from('c1909i2bkap@gmail.com', 'C1909I2');
    	
    	    $message->to($b['email'], $b['name']);
    	
    	    // $message->cc('john@johndoe.com', 'John Doe');
    	
    	    $message->subject('Order Confirmation');
    	});
        return back();
    }
}
