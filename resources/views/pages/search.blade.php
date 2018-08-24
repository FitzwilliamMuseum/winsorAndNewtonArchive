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

        <ul id="primary">
            <li><span>Quick Search</span></li>
            <li><a href="&lt;?php echo $page_name?&gt;?pid=gSearch#guided">Guided Search</a></li>
        </ul>

        {!! Form::open(['url' => 'search/results/rome']) !!}

        <div class="row">
            {!! Form::hidden('pid', 'sSearch') !!}

            <p>
                <span class="col1">Search for:</span>
            </p>

            <span class="col2">
                {!! Form::label('searchTerm', 'Search for') !!}
                {!! Form::text('searchTerm', '', ['class' => 'form-control']) !!}
            </span>
        </div>

        <span class="button"><button type="submit">Search!</button></span>
        {!! Form::close() !!}


        <p>Enter a search term and select at least one field to search;<br/>
            For a more specific search use the Guided Search.</p>

        <div class="clear"></div>

        <p>
            Use this search form to explore the range of material available. Some parts of the archive may be
            commercially sensitive so only an outline of the complete information is provided here, with no page-images.
            The database itself, with some examples of <a href="/database#ss">full records</a> and example <a
                    href="/database#page-images">page images</a> may be found <a href="/database#example">here</a>.
        </p>

        <div class="centerlist">
            <div class="listrow">
                <div class="label"><p>Recipe Name Original;</p></div>
                <div class="text"><p>title of item as it appears in the manuscripts.</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Recipe Name Interpreted;</p></div>
                <div class="text"><p>the subject or title of the recipe, expressed in modern terminology.</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Topics;</p></div>
                <div class="text"><p>major themes, e.g. adhesives, canvas, dryers, grounds, ink, oil paint manufacture,
                        pigment manufacture, varnish. See Examples</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Sub Topics;</p></div>
                <div class="text"><p>minor themes, specific materials, e.g. chrome yellow, permanant white, bitumen,
                        cochineal.</p></div>
            </div>
            <div class="listrow">
                <div class="label"><p>Book code, URC;</p></div>
                <div class="text"><p>each book in the archive has a two character code, each page a unique number, and
                        each recipe a Unique Recipe Code (URC).</p></div>
            </div>
        </div>


    </div>


@endsection