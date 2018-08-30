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


        {{ \Form::open(['url' => url('search/results'),'method' => 'GET']) }}
        <div class="row center-block">
            <div class="col-lg-6 center-block searchform">
                <div class="input-group">
                    <input type="text" id="query" name="query" value="" class="form-control"
                           placeholder="Search archive" required value="{{ old('query') }}">
                       <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Search the archive</button>
                       </span>
                </div>
            </div>
        </div>

        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        {!! Form::close() !!}


        <p>


        </p>

        <div class="clear"></div>

        <h2>Search guidance</h2>

        <p>
            Use this search form to explore the range of material available. Some parts of the archive may be
            commercially sensitive so only an outline of the complete information is provided here, with no
            page-images.
            The database itself, with some examples of <a href="/database#ss">full records</a> and example <a
                    href="/database#page-images">page images</a> may be found <a href="/database#example">here</a>.
        </p>

        <div>
            <p>
                You can now search across multiple fields in this unified search box. The default operator is <strong>AND</strong>
                though you can over ride this by using <strong>OR</strong> (for example burnt OR gold).
            </p>

            <p>
                To search specific fields you can use the syntax outlined below. In all cases replace
                <strong>{query}</strong> with your query and if multiple words for a field wrap in quotes.
            </p>

            <div class="listrow">
                <div class="label"><p>Recipe Name Original:</p></div>
                <div class="text">
                    <p>The title of item as it appears in the manuscripts.<br/>
                        Use: <strong>recipe_name_original:{query}</strong><br/>
                        Example: <a href="/search/results?query=recipe_name_original:'Moist Colours'">recipe_name_original:"Moist
                            Colours"</a>
                    </p>
                </div>
            </div>
            <div class="listrow">
                <div class="label">
                    <p>
                        Recipe Name Interpreted:
                    </p>
                </div>
                <div class="text">
                    <p>
                        The subject or title of the recipe, expressed in modern terminology.<br/>
                        Use: <strong>recipe_name_interpreted:{query}</strong><br/>
                        Example: <a href="/search/results?query=recipe_name_interpreted:'Glycerine'">recipe_name_interpreted:"Glycerine"</a>
                    </p>
                </div>
            </div>
            <div class="listrow">
                <div class="label">
                    <p>
                        Topics:
                    </p>
                </div>
                <div class="text">
                    <p>
                        Major themes, e.g. adhesives, canvas, dryers, grounds, ink, oil paint manufacture,pigment
                        manufacture, varnish. See Examples<br/>
                        Use: <strong>topic_sum:{query}</strong><br/>
                        Example:<a href="/search/results?query=topic_sum:'watercolour, moist, notes on grinding'">topic_sum:"watercolour, moist, notes on grinding"</a>
                    </p>
                </div>
            </div>


            <div class="listrow">
                <div class="label"><p>Unique Recipe Code or URC:</p></div>
                <div class="text">
                    <p>
                        Each book in the archive has a two character code, each page a unique number,
                        and each recipe a Unique Recipe Code (URC).<br/>
                        Use: <strong>unique_recipe_code:{query}</strong><br/>
                        Example:  <a href="/search/results?query=unique_recipe_code:'A4P023AL01'">unique_recipe_code:"A4P023AL01"</a>
                    </p>
                </div>
            </div>

            <div class="listrow">
                <div class="label"><p>Source book:</p></div>
                <div class="text">
                    <p>
                        Each book in the archive has a two character code.<br/>
                        Use: <strong>source_book:{query}</strong><br/>
                        Example:<a href="/search/results?query=source_book:C1">source_book:C1</a>
                    </p>
                </div>
            </div>

            <div class="listrow">
                <div class="label"><p>Date of recipe (year):</p></div>
                <div class="text">
                    <p>
                        The majority of records in the archive have a year of publication.<br/>
                        Use: <strong>source_book:{query}</strong><br/>
                        Example:<a href="/search/results?query=date_of_recipe_YEAR:1855">date_of_recipe_YEAR:1855</a>
                    </p>
                </div>
            </div>

        </div>


    </div>
    <h2>Browse the Index</h2>

    <p>
        It is difficult to know what to search for without being familiar with the contents of the database. The
        browse functionality here should serve as an introduction to the sort of topics catalogued in the archive.

    </p>

    <p>
        The contents of the archive are categorised into 5 areas. These areas are further subdivided into links that
        lead to built-in searches. Follow the category links below to browse through a variety of information, click
        on the resulting links to view the relevant indexed content:
    </p>

    <div>
        <p>Browse by:
            <a href="/search/browse/by/materials">Materials</a> | <a href="/search/browse/by/names">Names</a> | <a
                    href="/search/browse/by/pigments">Pigments</a> | <a href="/search/browse/by/topics">Topics</a> |
            <a href="/search/browse/by/books">Books</a></p>
    </div>
    <div class="spacer">&nbsp;</div>

@endsection