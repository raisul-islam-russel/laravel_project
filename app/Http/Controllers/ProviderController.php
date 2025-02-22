<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_ProviderController.php" was generated by ProBot AI.
* Date: 2/22/2025 11:52:45 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Provider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ProviderController extends Controller{
	public function index(){
		$providers = Provider::paginate(10);
		return view("pages.erp.provider.index",["providers"=>$providers]);
	}
	public function create(){
		return view("pages.erp.provider.create",[]);
	}
	public function store(Request $request){
		//Provider::create($request->all());
		$provider = new Provider;
		$provider->id=$request->id;
		$provider->user_id=$request->user_id;
		$provider->business_name=$request->business_name;
		$provider->business_description=$request->business_description;
		$provider->address=$request->address;
date_default_timezone_set("Asia/Dhaka");
		$provider->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$provider->updated_at=date('Y-m-d H:i:s');

		$provider->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$provider = Provider::find($id);
		return view("pages.erp.provider.show",["provider"=>$provider]);
	}
	public function edit(Provider $provider){
		return view("pages.erp.provider.edit",["provider"=>$provider,]);
	}
	public function update(Request $request,Provider $provider){
		//Provider::update($request->all());
		$provider = Provider::find($provider->id);
		$provider->id=$request->id;
		$provider->user_id=$request->user_id;
		$provider->business_name=$request->business_name;
		$provider->business_description=$request->business_description;
		$provider->address=$request->address;
date_default_timezone_set("Asia/Dhaka");
		$provider->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$provider->updated_at=date('Y-m-d H:i:s');

		$provider->save();

		return redirect()->route("providers.index")->with('success','Updated Successfully.');
	}
	public function destroy(Provider $provider){
		$provider->delete();
		return redirect()->route("providers.index")->with('success', 'Deleted Successfully.');
	}
}
?>
