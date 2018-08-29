<h3>Topics</h3>
<p>These links will take you to records covering the following topics.</p>
<p>
    @foreach($data as $document)
        @foreach($document['docs'] as $doc)
            <a href="/search/results?query=topic_sum:{!! ucfirst(trans($doc['title'][0])) !!}">{!! ucfirst(trans($doc['title'][0])) !!}</a> <br />
        @endforeach
    @endforeach
</p>