@extends('layouts.app')

@section('title', 'Hamilton Kerr Institute: Winsor & Newton Archive » Search')

@section('keywords', 'Conservation, archives, technical art history, Hamilton Kerr Institute, Winsor &amp; Newton, search')

@section('description', 'Search the index of the Winsor &amp; Newton archive project')

@section('pageTitle')
    Winsor & Newton Archive of 19<sup>th</sup> Century Artists’ materials
@endsection

@section('content')
    <div id="content-primary">
        <h2>Results Summary</h2>

        <p>Your search for <strong>{{ $queryString }}</strong> returned <strong>{{ $number }}</strong> results.</p>


        @if(!empty($records))
        <div id="browsecontainer">
            <p>Click on the text link at the end of each row to see a more detailed summary of that record.</p>

            <table class='data'>
                <thead>
                <tr>
                    <th>Original Recipe Name</th>
                    <th>Recipe Name interpreted</th>
                    <th>Topics</th>
                    <th>Sub Topics</th>
                    <th>Named Individuals</th>
                    <th>Year</th>
                    <th>Link to details</th>
                </tr>
                </thead>
                @foreach($records as $result)
                        <tr>
                            <td>{{ $result['recipe_name_original'][0] }}</td>
                            <td>{{ $result['recipe_name_interpreted'][0] }}</td>
                            <td>{{ $result['topic_sum'][0] }}</td>
                            <td>{{ $result['subtopic_sum'][0] }}</td>
                            <td>{{ $result['named_individuals_sum'][0] }}</td>
                            <td>{{ $result['date_of_recipe_YEAR'][0]  }}</td>
                            <td><a href="/detail/{{ $result['unique_recipe_code'][0] }}">{{ $result['unique_recipe_code'][0] }}</a></td>
                        </tr>
                @endforeach
            </table>

            @include('includes.pagination', ['paginator' => $paginate, 'link_limit' => 20])

        </div>
        @else
        <div id="browsecontainer">
            <p>No results to display.</p>
        </div>
        @endif

    </div>


@endsection

