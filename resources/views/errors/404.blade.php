@extends('layouts.app')
@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials: 404</p>
@endsection
@section('content')
    <h2>{{ $exception->getMessage() }}</h2>
    <p>That page does not exist!</p>
@endsection