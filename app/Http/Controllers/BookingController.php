<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_BookingController.php" was generated by ProBot AI.
* Date: 2/22/2025 11:51:12 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class BookingController extends Controller{
	public function index(){
		$bookings = Booking::paginate(10);
		return view("pages.erp.booking.index",["bookings"=>$bookings]);
	}
	public function create(){
		return view("pages.erp.booking.create",[
			
				"customers"=>Customer::all(),
				"service"=> Service::all(),
				
		   
				
		]);
	}
	public function store(Request $request){
		//Booking::create($request->all());
		$booking = new Booking;
		$booking->id=$request->id;
		$booking->customer_id=$request->customer_id;
		$booking->provider_id=$request->provider_id;
		$booking->service_id=$request->service_id;
		$booking->status_id=$request->status_id;
		$booking->scheduled_time=$request->scheduled_time;
		$booking->price=$request->price;
		$booking->payment_status_id=$request->payment_status_id;

		$booking->save();

		

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$booking = Booking::find($id);
		return view("pages.erp.booking.show",["booking"=>$booking]);
	}
	public function edit(Booking $booking){
		return view("pages.erp.booking.edit",["booking"=>$booking,]);
	}
	public function update(Request $request,Booking $booking){
		//Booking::update($request->all());
		$booking = Booking::find($booking->id);
		$booking->id=$request->id;
		$booking->customer_id=$request->customer_id;
		$booking->provider_id=$request->provider_id;
		$booking->service_id=$request->service_id;
		$booking->status_id=$request->status_id;
		$booking->scheduled_time=$request->scheduled_time;
		$booking->price=$request->price;
		$booking->payment_status_id=$request->payment_status_id;

		$booking->save();

		return redirect()->route("bookings.index")->with('success','Updated Successfully.');
	}
	public function destroy(Booking $booking){
		$booking->delete();
		return redirect()->route("bookings.index")->with('success', 'Deleted Successfully.');
	}
	public function find_customer(Request $request){
		$customer = Customer::find($request->id);
		return response()->json(['customer'=> $customer]);
	}
	public function find_service(Request $request){
		$service = Service::find($request->id);
		return response()->json(['product'=> $service]);
	}
	
}
?>
