@extends('layout.app')

@section('title')
    {{ $room['name'] }} - Groove Hotel
@endsection

@section('content')


@include('layout.components.detailRoom')

@endsection

@section('footer')