<h3>Topics</h3>
<p>These links will take you to records covering the following topics.</p>
<p>
    @foreach($data as $document)
        @foreach($document['docs'] as $doc)
            <a href="/">{!! ucfirst(trans($doc['title'][0])) !!}</a> <br />
        @endforeach
    @endforeach
</p>