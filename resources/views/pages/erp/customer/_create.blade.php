<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/customer/_create.blade.php" was generated by ProBot AI.
* Date: 3/10/2025 10:02:59 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create Customer')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('customers.index')}}">Manage</a>
<form action="{{route('customers.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="id" class="col-sm-2 col-form-label">Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="id" id="id" placeholder="Id">
	</div>
</div>
<div class="row mb-3">
	<label for="first_name" class="col-sm-2 col-form-label">First Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
	</div>
</div>
<div class="row mb-3">
	<label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number">
	</div>
</div>
<div class="row mb-3">
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="password" id="password" placeholder="Password">
	</div>
</div>
<div class="row mb-3">
	<label for="street_address" class="col-sm-2 col-form-label">Street Address</label>
	<div class="col-sm-10">
		<textarea class="form-control" name="street_address" id="street_address" placeholder="Street Address"></textarea>
	</div>
</div>
<div class="row mb-3">
	<label for="city" class="col-sm-2 col-form-label">City</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="city" id="city" placeholder="City">
	</div>
</div>
<div class="row mb-3">
	<label for="state" class="col-sm-2 col-form-label">State</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="state" id="state" placeholder="State">
	</div>
</div>
<div class="row mb-3">
	<label for="postal_code" class="col-sm-2 col-form-label">Postal Code</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code">
	</div>
</div>
<div class="row mb-3">
	<label for="profile_picture" class="col-sm-2 col-form-label">Profile Picture</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="profile_picture" id="profile_picture" placeholder="Profile Picture">
	</div>
</div>
<div class="row mb-3">
	<label for="booking_notes" class="col-sm-2 col-form-label">Booking Notes</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="booking_notes" id="booking_notes" placeholder="Booking Notes">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
