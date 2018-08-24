<h3>Materials</h3>
<p>
    These links will take you to search results for recipes concerning the follwoing materials.
    <br/>
    Note that these link to records that discuss materials and do not link to recipes that contain that material.
</p>
<p>
    @foreach($data as $document)
        @foreach($document['docs'] as $doc)
            <a href="/search/results?query=subtopic_sum:*{{$doc['title'][0]}}*">{!! ucfirst(trans($doc['title'][0])) !!}</a> <br />
        @endforeach
    @endforeach
</p>