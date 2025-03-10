<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_AdditionalServiceController.php" was generated by ProBot AI.
* Date: 2/27/2025 9:56:40 AM
* Contact: towhid1@outlook.com
*/

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\AdditionalService;
use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ProcessController extends Controller
{
	public function index(Request $request)
	{
		// print_r($request->all());



		// [form_data] => Array
        // (
        //     [firstName] => Salman
        //     [lastName] => Sheikh
        //     [email] => raqeeb@gmail.com
        //     [phone] => 1675600847
        //     [streetAddress] => dhaka
        //     [city] => dhaka
        //     [state] => dhaka
        //     [postalCode] => 1203
        //     [bookingNotes] => must take water tap
        // )

		// [selected_provider] => Array
        // (
        //     [id] => 2
        //     [user_id] => 3
        //     [business_name] => Electrician Hub
        //     [business_description] => Professional electrical wiring and repair services.
        //     [address] => 45 Power Lane, Chittagong, Bangladesh
        //     [provider_img] => provider-02.jpg
        //     [created_at] => 2025-02-24T12:27:25.000000Z
        //     [updated_at] => 2025-02-26T10:00:32.000000Z
        // )


		print_r($request->all());	

		$customer = $request->form_data;
		$customer = new Customer();
		$customer->first_name = $customer['firstName'];
		$customer->last_name = $customer['lastName'];
		// $customer->email = $customer->email;
		// $customer->phone_number = $customer->phone_number;
		// $customer->password = $customer->password;
		// $customer->street_address = $customer->street_address;
		// $customer->city = $customer->city;
		// $customer->state = $customer->state;
		// $customer->postal_code = $customer->postal_code;
		// $customer->profile_picture = $customer->profile_picture;
		// $customer->booking_notes = $customer->booking_notes;
		// date_default_timezone_set("Asia/Dhaka");
		// $customer->created_at = date('Y-m-d H:i:s');
		// date_default_timezone_set("Asia/Dhaka");
		// $customer->updated_at = date('Y-m-d H:i:s');

		// $customer->save();

		// $customer_id = $customer->id;
	
		// $booking = new Booking();
		// $booking->customer_id =1;    //$customer->id;
		// $booking->provider_id = $request->selected_provider['id'];
		// $booking->service_id = $request->user_cart[0]['item_id'];
		// $booking->status_id =1;
		// $booking->scheduled_time = $request->selected_datetime['time'][0];
		// $booking->price = 3000;
		// $booking->payment_status_id =1;// $request->payment_status_id;

		// date_default_timezone_set("Asia/Dhaka");
		// $booking->created_at=date('Y-m-d H:i:s');
        //  date_default_timezone_set("Asia/Dhaka");
		// $booking->updated_at=date('Y-m-d H:i:s');
		// $booking->save();


	
		// print_r($booking->id);
		// $letest_booking_id = $booking->id; 

		// [item_id] => 5
		// [name] => High-Pressure Cleaning
		// [price] => 1800
		// [qty] => 1
		// [total_discount] => 0
		// [subtotal] => 1800


        
		foreach ($request->user_cart as $key => $service) {
			
	      if ($key == 0) {	
			continue;
		  }
		
		$bookingdetail = new BookingDetail;
		$bookingdetail->booking_id=1;  //$letest_booking_id ;
		$bookingdetail->service_id= $request->user_cart[0]['item_id'];
		$bookingdetail->additional_service_id=$service['item_id'];
		$bookingdetail->quantity=$service['qty'];
		$bookingdetail->booking_notes=  "";
		$bookingdetail->price=$service['price'];
        date_default_timezone_set("Asia/Dhaka");
		$bookingdetail->created_at=date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
		$bookingdetail->updated_at=date('Y-m-d H:i:s');

		$bookingdetail->save();

	    }

	}
}
