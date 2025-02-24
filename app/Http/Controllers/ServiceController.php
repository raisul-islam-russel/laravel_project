<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_ServiceController.php" was generated by ProBot AI.
* Date: 2/22/2025 1:11:47 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ServiceController extends Controller{
	public function index(){
		$services = Service::paginate(10);
		
		return view("pages.erp.service.index",["services"=>$services]);
	}
	public function create(){
		return view("pages.erp.service.create",[]);
	}

	public function store(Request $request){
		//Service::create($request->all());
		$service = new Service;
		$service->id=$request->id;
		$service->category_id=$request->category_id;
		$service->provider_id=$request->provider_id;
		$service->title=$request->title;
		$service->description=$request->description;
		$service->price=$request->price;
		$service->status_id=$request->status_id;

		$service->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$service = Service::find($id);
		return view("pages.erp.service.show",["service"=>$service]);
	}
	public function edit(Service $service){
		return view("pages.erp.service.edit",["service"=>$service,]);
	}
	public function update(Request $request,Service $service){
		//Service::update($request->all());
		$service = Service::find($service->id);
		$service->id=$request->id;
		$service->category_id=$request->category_id;
		$service->provider_id=$request->provider_id;
		$service->title=$request->title;
		$service->description=$request->description;
		$service->price=$request->price;
		$service->status_id=$request->status_id;

		$service->save();

		return redirect()->route("services.index")->with('success','Updated Successfully.');
	}
	public function destroy(Service $service){
		$service->delete();
		return redirect()->route("services.index")->with('success', 'Deleted Successfully.');
	}
	public function find_service($id){
		$service = Service::find($id);
		return response()->json(['service'=> $service]);
	}
}
?>
