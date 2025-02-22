<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/booking/_create.blade.php" was generated by ProBot AI.
* Date: 2/22/2025 11:51:16 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create Booking')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('bookings.index')}}">Manage</a>
<form action="{{route('bookings.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="id" class="col-sm-2 col-form-label">Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="id" id="id" placeholder="Id">
	</div>
</div>
<div class="row mb-3">
	<label for="customer_id" class="col-sm-2 col-form-label">Customer Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="customer_id" id="customer_id" placeholder="Customer Id">
	</div>
</div>
<div class="row mb-3">
	<label for="provider_id" class="col-sm-2 col-form-label">Provider Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="provider_id" id="provider_id" placeholder="Provider Id">
	</div>
</div>
<div class="row mb-3">
	<label for="service_id" class="col-sm-2 col-form-label">Service Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="service_id" id="service_id" placeholder="Service Id">
	</div>
</div>
<div class="row mb-3">
	<label for="status_id" class="col-sm-2 col-form-label">Status Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="status_id" id="status_id" placeholder="Status Id">
	</div>
</div>
<div class="row mb-3">
	<label for="price" class="col-sm-2 col-form-label">Price</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="price" id="price" placeholder="Price">
	</div>
</div>
<div class="row mb-3">
	<label for="payment_status_id" class="col-sm-2 col-form-label">Payment Status Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="payment_status_id" id="payment_status_id" placeholder="Payment Status Id">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
