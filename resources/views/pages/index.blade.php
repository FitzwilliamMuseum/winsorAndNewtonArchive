@extends('layouts.app')

@section('keywords','Conservation, archives, technical art history, Hamilton Kerr Institute, Winsor &amp; Newton, search results')

@section('title', 'Winsor & Newton Archive of 19th Century Artists’ materials')

@section('description','Winsor & Newton archive project')

@section('pageTitle')
Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials
@endsection

@section('content')
    <div id="content-primary">
        <h1>Project Home</h1>

        <p>Winsor &amp; Newton was founded in 1832, and continues today as the leading supplier of fine artists’
            materials worldwide. The nineteenth century manuscript archive is unique, it includes 87 manuscripts of
            recipes and notes for making artists’ pigments, oil colour, water colours and other materials, a total
            of 17,000 pages. No other known historical archive of nineteenth century colourmen are as extensive and
            detailed.</p>

        <p>Winsor &amp; Newton have generously permitted the cataloguing, digital imaging and indexing of this
            important collection, allowing access for researchers to unique primary sources. This website contains a
            brief introduction to the archive material that has been catalogued. The completed AHRC funded project
            has made the catalogue available internationally at a number of portals and an index of information via
            this site.</p>

        <h2>Accessing the Material</h2>

        <p>The complete database with images may be used at:</p>
        <ul>
            <li>Hamilton Kerr Institute</li>
            <li>Tate, London</li>
            <li>Courtauld Institute, London</li>
            <li>Rijksbureau voor Kunsthistorische Documentatie (RKD), The Hague, Netherlands</li>
        </ul>
        <p>The on-line index on this site provides an indication of the content of the full database to allow
            potential researchers to evaluate the applicability of this material to their work.</p>

        <p>This project has been made possible by the kind permission and collaboration of <a
                    href="http://www.winsornewton.com">Winsor &amp; Newton</a>. The research was initiated in the
            Netherlands under sponsorship of the Nederlandse Organisatie voor Wettenschappelijk Onderzoek (<a
                    href="http://www.nwo.nl">NWO</a>). The project continued at the Hamilton Kerr Institute, funded
            by the Arts and Humanities Research Council (<a href="http://www.ahrc.ac.uk">AHRC</a>).</p>

        <p class="centred">
            <a href="http://www.nwo.nl/"><img class="logo" src="{{ URL::to('/') }}/images/archives/wn/nwologo.gif"
                                              alt="NWO"/></a>&nbsp;
            <a href="http://www.ahrc.ac.uk"><img class="logo" src="{{ URL::to('/') }}/images/archives/wn/ahrc_logo.gif"
                                                 alt="AHRC"/></a>
        </p>
    </div>
@endsection