<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/user/_create.blade.php" was generated by ProBot AI.
* Date: 2/22/2025 11:53:02 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Create User')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('users.index')}}">Manage</a>
<form action="{{route('users.store')}}" method ="post" enctype="multipart/form-data">
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
	<label for="role_id" class="col-sm-2 col-form-label">Role Id</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="role_id" id="role_id" placeholder="Role Id">
	</div>
</div>
<div class="row mb-3">
	<label for="profile_picture" class="col-sm-2 col-form-label">Profile Picture</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="profile_picture" id="profile_picture" placeholder="Profile Picture">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
