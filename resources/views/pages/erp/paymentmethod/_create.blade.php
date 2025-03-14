<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/paymentmethod/_create.blade.php" was generated by ProBot AI.
* Date: 3/10/2025 11:47:57 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create PaymentMethod')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('paymentmethods.index')}}">Manage</a>
<form action="{{route('paymentmethods.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="id" class="col-sm-2 col-form-label">Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="id" id="id" placeholder="Id">
	</div>
</div>
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" id="name" placeholder="Name">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
