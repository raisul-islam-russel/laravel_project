<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/booking/_show.blade.php" was generated by ProBot AI.
* Date: 2/22/2025 11:51:16 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Booking')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('bookings.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$booking->id}}</td></tr>
		<tr><th>Customer Id</th><td>{{$booking->customer_id}}</td></tr>
		<tr><th>Provider Id</th><td>{{$booking->provider_id}}</td></tr>
		<tr><th>Service Id</th><td>{{$booking->service_id}}</td></tr>
		<tr><th>Status Id</th><td>{{$booking->status_id}}</td></tr>
		<tr><th>Scheduled Time</th><td>{{$booking->scheduled_time}}</td></tr>
		<tr><th>Price</th><td>{{$booking->price}}</td></tr>
		<tr><th>Payment Status Id</th><td>{{$booking->payment_status_id}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
