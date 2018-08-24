<h3>Pigments</h3>
<p>These links will take you to search results for recipes concerning the following pigments.</p>
<p>
    @foreach($data as $document)
        @foreach($document['docs'] as $doc)
            <a href="">{!! ucfirst(trans($doc['title'][0])) !!}</a> <br />
        @endforeach
    @endforeach
</p>