<?php
/**
 * Created by PhpStorm.
 * User: danielpett
 * Date: 22/08/2018
 * Time: 09:34
 */
?>
@extends('layouts.app')
@section('title','Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials')
@section('keywords', 'Conservation, archives, technical art history, Hamilton Kerr Institute, Winsor &amp; Newton')
@section('description', 'Browse the index of the Winsor &amp; Newton archive')

@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials
@endsection

@section('content')
    <div id="content-primary">
        <h1>Browse the Index</h1>

        <p>It is difficult to know what to search for without being familiar with the contents of the database. The
            browse functionality here should serve as an introduction to the sort of topics catalogued in the archive.
            This may prompt you to <a href="/search">search</a> the database yourself.</p>

        <p>The contents of the archive are categorised into 5 areas. These areas are further subdivided into links that
            lead to built-in searches. Follow the category links below to browse through a variety of information, click
            on the resulting links to view the relevant indexed content:</p>

        <div id="centred">
            <p>Browse by:
                <a href="/browse/by/materials">Materials</a> | <a href="/browse/by/names">Names</a> | <a
                        href="/browse/by/pigments">Pigments</a> | <a href="/browse/by/topics">Topics</a> |
                <a href="/browse/by/books">Books</a></p>
        </div>
        <div class="spacer">&nbsp;</div>
    </div>
@endsection