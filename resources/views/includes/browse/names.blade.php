<h3>People and Places</h3>
<p>Immediately below are a few significant names of people mentioned in the archive.<br/>
    The full list of named people and places is considerably longer and is available <a
            href="/browse/by/fullnames">here</a>.
</p>

<p>
    @foreach($data as $document)
        @foreach($document['docs'] as $doc)
            <a href="/search/results?named_individuals_sum:'$doc['title'][0]'">{!! ucfirst(trans($doc['title'][0])) !!}</a> <br />
        @endforeach
    @endforeach
</p>