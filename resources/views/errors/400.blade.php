@extends('layouts.app')
@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials: 400</p>
@endsection

@section('title', 'Winsor & Newton Archive of 19th Century Artists’ materials: Error 400')

@section('content')
    <h2>{{ $exception->getMessage() }}</h2>
    <p>That page does not exist!</p>
@endsection