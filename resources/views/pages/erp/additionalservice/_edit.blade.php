<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/additionalservice/_edit.blade.php" was generated by ProBot AI.
* Date: 2/27/2025 9:56:42 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Edit AdditionalService')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('additionalservices.index')}}">Manage</a>
<form action="{{route('additionalservices.update',$additionalservice)}}" method ="post" enctype="multipart/form-data">
@csrf
@method("PUT")

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
@endsection
@section('script')


@endsection
