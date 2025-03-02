<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/subcategory/_show.blade.php" was generated by ProBot AI.
* Date: 2/23/2025 10:56:52 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show SubCategory')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('subcategorys.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$subcategory->id}}</td></tr>
		<tr><th>Category Id</th><td>{{$subcategory->category_id}}</td></tr>
		<tr><th>Name</th><td>{{$subcategory->name}}</td></tr>
		<tr><th>Description</th><td>{{$subcategory->description}}</td></tr>
		<tr><th>Image Url</th><td>{{$subcategory->image_url}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
