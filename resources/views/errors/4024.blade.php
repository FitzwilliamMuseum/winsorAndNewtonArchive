@extends('layouts.app')
@section('content')
    <h2>{{ $exception->getMessage() }}</h2>
    <p>That page does not exist!</p>
@endsection