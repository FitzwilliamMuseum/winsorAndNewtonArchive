<h3>People and Places</h3>
<p>
    Below is the full list of names catalogued to date.<br/>
    The smaller list of names is available <a href="/browse/by/names">here</a>.
</p>
<p>
    @foreach($data as $document)
        @foreach($document['docs'] as $doc)
            <a href="/search/results?query=named_individuals_sum:'{{$doc['title'][0]}}' ">{!! ucfirst(trans($doc['title'][0])) !!}</a> <br />
        @endforeach
    @endforeach
</p>