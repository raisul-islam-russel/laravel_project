<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_ReviewController.php" was generated by ProBot AI.
* Date: 2/25/2025 12:45:47 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Service;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ReviewController extends Controller{
	public function index(){
		$reviews = Review::paginate(10);
		return view("pages.erp.review.index",["reviews"=>$reviews]);
	}
	public function create(){
		return view("pages.erp.review.create",["services"=>Service::all(),"customers"=>Customer::all()]);
	}
	public function store(Request $request){
		//Review::create($request->all());
		$review = new Review;
		$review->service_id=$request->service_id;
		$review->customer_id=$request->customer_id;
		$review->rating=$request->rating;
		$review->review=$request->review;
date_default_timezone_set("Asia/Dhaka");
		$review->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$review->updated_at=date('Y-m-d H:i:s');

		$review->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$review = Review::find($id);
		return view("pages.erp.review.show",["review"=>$review]);
	}
	public function edit(Review $review){
		return view("pages.erp.review.edit",["review"=>$review,"services"=>Service::all(),"customers"=>Customer::all()]);
	}
	public function update(Request $request,Review $review){
		//Review::update($request->all());
		$review = Review::find($review->id);
		$review->service_id=$request->service_id;
		$review->customer_id=$request->customer_id;
		$review->rating=$request->rating;
		$review->review=$request->review;
date_default_timezone_set("Asia/Dhaka");
		$review->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$review->updated_at=date('Y-m-d H:i:s');

		$review->save();

		return redirect()->route("reviews.index")->with('success','Updated Successfully.');
	}
	public function destroy(Review $review){
		$review->delete();
		return redirect()->route("reviews.index")->with('success', 'Deleted Successfully.');
	}
}
?>
