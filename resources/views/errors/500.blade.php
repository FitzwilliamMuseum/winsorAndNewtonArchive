@extends('layouts.app')
@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials: 500</p>
@endsection

@section('title', 'Winsor & Newton Archive of 19th Century Artists’ materials: Error 500')


@section('content')
    <h2>{{ $exception->getMessage() }}</h2>
    <p>That page has thrown an internal error!</p>
@endsection