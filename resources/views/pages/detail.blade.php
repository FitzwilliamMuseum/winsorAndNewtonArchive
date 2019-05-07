@extends('layouts.app')

@section('pageTitle')
    Winsor & Newton Archive of 19<sup>th</sup> Century Artists’ materials
@endsection

@section('title', 'Winsor & Newton Archive of 19th Century Artists’ materials')

@section('keywords','recipe,details,winsor,newton')
@foreach($data as $document)
    @foreach($document['docs'] as $recipe)
        @section('description')
            @if(array_key_exists('recipe_name_original', $recipe))
                Details for recipe {!! $recipe['recipe_name_original'][0] !!}
            @else
                Details for recipe {!! $recipe['unique_recipe_code'][0] !!}
            @endif
        @endsection
    @endforeach
@endforeach

@section('content')
    <div id="content-primary" vocab="http://schema.org/" typeof="Recipe">

        <h2>Detail View for URC: {{ strip_tags($urc) }}</h2>

        @foreach($data as $document)
            @foreach($document['docs'] as $recipe)

                <table class="data">
                    <tr>
                        <td class="topic">Original Recipe Name</td>
                        @if(array_key_exists('recipe_name_original', $recipe))
                            <td class="detail">
                                <span property="name"><b>{!! $recipe['recipe_name_original'][0] !!}</b></span>
                            </td>
                        @else
                            <td class="detail">None listed</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Recipe Name interpreted</td>
                        @if(array_key_exists('recipe_name_interpreted', $recipe))
                            <td class="detail"><b>{!! $recipe['recipe_name_interpreted'][0] !!}</b></td>
                        @else
                            <td class="detail">None listed</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Topics</td>
                        @if(array_key_exists('topic_sum', $recipe))
                            <td class="detail">{!! $recipe['topic_sum'][0] !!}</td>

                        @else
                            <td class="detail">None listed</td>
                        @endif

                    </tr>
                    <tr>
                        <td class="topic">Sub Topics</td>
                        @if(array_key_exists('subtopic_sum', $recipe))
                            <td class="detail">{!! $recipe['subtopic_sum'][0] !!}</td>
                        @else

                            <td class="detail">None listed</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Named Individuals</td>
                        @if(array_key_exists('named_individuals_sum', $recipe))
                            <td class="detail">{!! $recipe['named_individuals_sum'][0] !!}</td>
                        @else
                            <td class="detail">None listed</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Year</td>
                        @if(array_key_exists('date_of_recipe_YEAR', $recipe))
                            <td class="detailc">{!! $recipe['date_of_recipe_YEAR'][0] !!}</td>
                        @else
                            <td class="detail">None listed</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Restriction</td>
                        @if(array_key_exists('restriction', $recipe))
                            <td>{!! $recipe['restriction'][0] !!}</td>
                        @else
                            <td class="detail">Unrestricted</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Source Book code</td>
                        @if(array_key_exists('source_book', $recipe))
                            <td class="detail">{!! $recipe['source_book'][0] !!}</td>
                        @else
                            <td class="detail">None listed</td>
                        @endif
                    </tr>

                    <tr>
                        <td class="topic">Swatch</td>
                        @if(array_key_exists('swatch', $recipe))
                            <td class="detail">{!! ucfirst(trans($recipe['swatch'][0])) !!}</td>
                        @else
                            <td class="detail">None listed</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Discusses quality</td>
                        @if(array_key_exists('discuss_quality', $recipe))
                            <td class="detail">{!! $recipe['discuss_quality'][0] !!}</td>
                        @else
                            <td class="detail">No</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Mention of costs/prices</td>
                        @if(array_key_exists('costs_prices', $recipe))
                            <td class="detail">{!! $recipe['costs_prices'][0] !!}</td>
                        @else
                            <td class="detail">No</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Illustration</td>
                        @if(array_key_exists('illustration', $recipe))
                            <td class="detail">{!! ucfirst(trans($recipe['illustration'][0])) !!}</td>
                        @else
                            <td class="detail">No</td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">URC</td>
                        @if(array_key_exists('unique_recipe_code', $recipe))
                            <td class="detail">{!! $recipe['unique_recipe_code'][0] !!}</td>
                        @else
                            <td class="detail">No</td>
                        @endif
                    </tr>

                    @if(array_key_exists('unique_recipe_code', $recipe))
                        <?php
                        $file = '/assets/' . $recipe['source_book'][0] . '/' . substr($recipe['unique_recipe_code'][0], 0, -3) . '.jpg';
                        ?>
                        @if(file_exists(public_path() .$file))
                            <tr>
                                <td colspan="2"><a data-featherlight="image" href="<?php echo $file;?>"><img
                                                src="<?php echo $file;?>" width="100%"/></a>
                                </td>
                            </tr>

                        @endif
                    @endif
                </table>
            @endforeach
        @endforeach
    </div>

@endsection