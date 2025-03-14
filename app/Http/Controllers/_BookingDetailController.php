<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_BookingDetailController.php" was generated by ProBot AI.
* Date: 3/10/2025 10:00:44 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\BookingDetail;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Additional_Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class BookingDetailController extends Controller{
	public function index(){
		$bookingdetails = BookingDetail::paginate(10);
		return view("pages.erp.bookingdetail.index",["bookingdetails"=>$bookingdetails]);
	}
	public function create(){
		return view("pages.erp.bookingdetail.create",["bookings"=>Booking::all(),"services"=>Service::all(),"additional_services"=>Additional_Service::all()]);
	}
	public function store(Request $request){
		//BookingDetail::create($request->all());
		$bookingdetail = new BookingDetail;
		$bookingdetail->booking_id=$request->booking_id;
		$bookingdetail->service_id=$request->service_id;
		$bookingdetail->additional_service_id=$request->additional_service_id;
		$bookingdetail->quantity=$request->quantity;
		$bookingdetail->booking_notes=$request->booking_notes;
		$bookingdetail->price=$request->price;
date_default_timezone_set("Asia/Dhaka");
		$bookingdetail->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$bookingdetail->updated_at=date('Y-m-d H:i:s');

		$bookingdetail->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$bookingdetail = BookingDetail::find($id);
		return view("pages.erp.bookingdetail.show",["bookingdetail"=>$bookingdetail]);
	}
	public function edit(BookingDetail $bookingdetail){
		return view("pages.erp.bookingdetail.edit",["bookingdetail"=>$bookingdetail,"bookings"=>Booking::all(),"services"=>Service::all(),"additional_services"=>Additional_Service::all()]);
	}
	public function update(Request $request,BookingDetail $bookingdetail){
		//BookingDetail::update($request->all());
		$bookingdetail = BookingDetail::find($bookingdetail->id);
		$bookingdetail->booking_id=$request->booking_id;
		$bookingdetail->service_id=$request->service_id;
		$bookingdetail->additional_service_id=$request->additional_service_id;
		$bookingdetail->quantity=$request->quantity;
		$bookingdetail->booking_notes=$request->booking_notes;
		$bookingdetail->price=$request->price;
date_default_timezone_set("Asia/Dhaka");
		$bookingdetail->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$bookingdetail->updated_at=date('Y-m-d H:i:s');

		$bookingdetail->save();

		return redirect()->route("bookingdetails.index")->with('success','Updated Successfully.');
	}
	public function destroy(BookingDetail $bookingdetail){
		$bookingdetail->delete();
		return redirect()->route("bookingdetails.index")->with('success', 'Deleted Successfully.');
	}
}
?>
