<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\destModel;
use App\Model\ToursModel;
use Mail;
use App\Model\order_tb;

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
        $ss = session('id');
        $name = session('name');
        $email = session('email');
        $phone = session('phone');
        $data['user'] = [$name, $email, $phone,];

        order_tb::create(['user_id'=>$ss,'tour_id' => $tour->tour_id,'name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$request->address,'departure'=>$request->departure,'tour_name'=>$tour->tour_name,'destination'=>$tour->dest_name,'children'=>$request->children,'adults'=>$request->adults,'package'=>$request->package,'total'=>$data['total'], 'tour_price'=>$request->tour_price]);
        
    	Mail::send('frontEnd.email', $data, function ($message) use($email, $name) {
    	    $message->from('c1909i2bkap@gmail.com', 'C1909I2');
    	
    	    $message->to($email, $email);
    	
    	    // $message->cc('john@johndoe.com', 'John Doe');
    	
    	    $message->subject('Order Confirmation');
    	});
        return back();
    }
    public function postbooking2(Request $request) {
        $tour = ToursModel::where('tour_id',$request->tour_id)->orWhere('tour_id',$request->id)->join('destination_tb','destination_tb.dest_id','=','tours_tb.dest_id')->get();
        foreach ($tour as $tour) {
            $data['cart'] = ['id' => $tour->tour_id, 'name' => $tour->tour_name, 'Destination' => $tour->dest_name, 'qty' => 1, 'price' => $tour->tour_price];
        }
        $c = $data['cart'];
        $data['info'] = $request->all();
        $email = $request->email;
        $b =  $request->all();
        $data['total'] = $c['price']*$b['adults'] + ($c['price']*0.1)*$b['children'] + $b['package']*$b['adults'] + ($b['package']*0.1)*$b['children'];
        $ss = session('id');
        $name = session('name');
        $email = session('email');
        $phone = session('phone');
        $data['user'] = [$name, $email, $phone,];

        order_tb::create(['user_id'=>$ss,'tour_id' => $tour->tour_id,'name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$request->address,'departure'=>$request->departure,'tour_name'=>$tour->tour_name,'destination'=>$tour->dest_name,'children'=>$request->children,'adults'=>$request->adults,'package'=>$request->package,'total'=>$data['total'], 'tour_price'=>$request->tour_price]);
        
        Mail::send('frontEnd.email', $data, function ($message) use($email, $name) {
            $message->from('c1909i2bkap@gmail.com', 'C1909I2');

            $message->to($email, $email);

            // $message->cc('john@johndoe.com', 'John Doe');

            $message->subject('Order Confirmation');
        });
        return redirect()->route('user');
    }
}
