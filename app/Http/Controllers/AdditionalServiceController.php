<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_AdditionalServiceController.php" was generated by ProBot AI.
* Date: 2/27/2025 9:56:40 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\AdditionalService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class AdditionalServiceController extends Controller{
	public function index(){
		$additionalservices = AdditionalService::paginate(10);
		return view("pages.erp.additionalservice.index",["additionalservices"=>$additionalservices]);
	}
	public function create(){
		return view("pages.erp.additionalservice.create",[]);
	}
	public function store(Request $request){
		//AdditionalService::create($request->all());
		$additionalservice = new AdditionalService;

		$additionalservice->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$additionalservice = AdditionalService::find($id);
		return view("pages.erp.additionalservice.show",["additionalservice"=>$additionalservice]);
	}
	public function edit(AdditionalService $additionalservice){
		return view("pages.erp.additionalservice.edit",["additionalservice"=>$additionalservice,]);
	}
	public function update(Request $request,AdditionalService $additionalservice){
		//AdditionalService::update($request->all());
		$additionalservice = AdditionalService::find($additionalservice->id);

		$additionalservice->save();

		return redirect()->route("additionalservices.index")->with('success','Updated Successfully.');
	}
	public function destroy(AdditionalService $additionalservice){
		$additionalservice->delete();
		return redirect()->route("additionalservices.index")->with('success', 'Deleted Successfully.');
	}
	function bookingadditional(){

        $additionalservices= AdditionalService::paginate(12);

		//print_r(  $services);

		return view('pages.booking', compact('additionalservices'));
	}
}
?>
