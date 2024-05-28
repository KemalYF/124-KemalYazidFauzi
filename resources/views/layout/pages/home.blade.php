@extends('layout.app')

@section('title', 'Groove Hotel')

@section('content')

@include('layout.components.jumbotron')
@include('layout.components.hero')
@include('layout.components.dataRoom')
@include('layout.components.contentHome')
@include('layout.components.contactFooter')

@endsection

@section('footer')