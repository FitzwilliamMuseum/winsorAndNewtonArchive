@extends('layouts.app')

@section('title', 'Hamilton Kerr Institute: Winsor & Newton Archive » Search')

@section('keywords', 'Conservation, archives, technical art history, Hamilton Kerr Institute, Winsor &amp; Newton, search')

@section('description', 'Search the index of the Winsor &amp; Newton archive project')

@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials
@endsection

@section('content')
    <div id="content-primary">
        <h1>Search the Index</h1>

        <p>
            If you are unsure what search terms to use you can also <a href="/browse">browse</a> this index to
            familiarise
            yourself with the content.
        </p>


        {{ \Form::open(['url' => url('search/results')  ,'method' => 'GET']) }}
        {{ csrf_field() }}
        <div class="row center-block">
            <div class="col-lg-6 center-block searchform">
                <div class="input-group">
                    <input type="text" id="query" name="query" value="" class="form-control"
                           placeholder="Search archive">
                       <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Search the archive</button>
                       </span>
                </div>
            </div>
        </div>
        {!! Form::close() !!}


       <p>


       </p>
        <div class="clear"></div>

        <p>
            Use this search form to explore the range of material available. Some parts of the archive may be
            commercially sensitive so only an outline of the complete information is provided here, with no
            page-images.
            The database itself, with some examples of <a href="/database#ss">full records</a> and example <a
                    href="/database#page-images">page images</a> may be found <a href="/database#example">here</a>.
        </p>

        <di>
            <div class="listrow">
                <div class="label"><p>Recipe Name Original:</p></div>
                <div class="text">
                    <p>The title of item as it appears in the manuscripts. An example search:
                        recipe_name_original:Index
                    </p>
                </div>
            </div>
            <div class="listrow">
                <div class="label"><p>Recipe Name Interpreted;</p></div>
                <div class="text"><p>the subject or title of the recipe, expressed in modern terminology.</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Topics;</p></div>
                <div class="text"><p>major themes, e.g. adhesives, canvas, dryers, grounds, ink, oil paint
                        manufacture,
                        pigment manufacture, varnish. See Examples</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Sub Topics;</p></div>
                <div class="text"><p>minor themes, specific materials, e.g. chrome yellow, permanant white, bitumen,
                        cochineal.</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Book code, URC;</p></div>
                <div class="text"><p>each book in the archive has a two character code, each page a unique number,
                        and
                        each recipe a Unique Recipe Code (URC).</p></div>
            </div>
        </di>


    </div>


@endsection