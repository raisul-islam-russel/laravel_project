<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_CategoryController.php" was generated by ProBot AI.
* Date: 2/22/2025 11:52:24 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class CategoryController extends Controller{
	public function index(){
		$categorys = Category::paginate(10);
		return view("pages.erp.category.index",["categorys"=>$categorys]);
	}
	public function create(){
		return view("pages.erp.category.create",[]);
	}
	public function store(Request $request){
		//Category::create($request->all());
		$category = new Category;
		$category->id=$request->id;
		$category->name=$request->name;
		$category->description=$request->description;
		$category->image_url=$request->image_url;

		$category->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$category = Category::find($id);
		return view("pages.erp.category.show",["category"=>$category]);
	}
	public function edit(Category $category){
		return view("pages.erp.category.edit",["category"=>$category,]);
	}
	public function update(Request $request,Category $category){
		//Category::update($request->all());
		$category = Category::find($category->id);
		$category->id=$request->id;
		$category->name=$request->name;
		$category->description=$request->description;
		$category->image_url=$request->image_url;

		$category->save();

		return redirect()->route("categorys.index")->with('success','Updated Successfully.');
	}
	public function destroy(Category $category){
		$category->delete();
		return redirect()->route("categorys.index")->with('success', 'Deleted Successfully.');
	}
}
?>
