<h3>Books</h3>
<p>These links will take you to search results grouped by book.</p>
@foreach($data as $document)
    @foreach($document['docs'] as $doc)
        <div class="book"><a href="">
                <img src="{{ URL::to('/') }}/images/archives/wn/thumbs/{!! $doc['title'][0] !!}COVER.PNG"
                     alt="image of cover for book code {!! $doc['title'][0] !!}"/>
                <p>{!! $doc['title'][0] !!}</p></a>
        </div>
    @endforeach
@endforeach
