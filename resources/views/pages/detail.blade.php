@extends('layouts.app')
@section('pageTitle')
    Winsor &amp; Newton Archive of 19<sup>th</sup> Century Artists’ materials</p>
@endsection

@section('content')
    <div id="content-primary">

        <h2>Detail View for URC: {{ strip_tags($urc) }}</h2>

        @foreach($data as $document)
            @foreach($document['docs'] as $recipe)
                <table class="data">
                    <tr>
                        <td class="topic">Original Recipe Name</td>
                        <td class="detail"><b>{!! $recipe['recipe_name_original'][0] !!}</b></td>
                    </tr>
                    <tr>
                        <td class="topic">Recipe Name interpreted</td>
                        <td class="detail"><b>{!! $recipe['recipe_name_interpreted'][0] !!}</b></td>
                    </tr>
                    <tr>
                        <td class="topic">Topics</td>
                        <td class="detail">{!! $recipe['topic_sum'][0] !!}</td>
                    </tr>
                    <tr>
                        <td class="topic">Sub Topics</td>
                        @if(array_key_exists('subtopic_sum', $recipe))
                            <td class="detail">{!! $recipe['subtopic_sum'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Named Individuals</td>
                        @if(array_key_exists('named_individuals_sum', $recipe))
                            <td class="detail">{!! $recipe['named_individuals_sum'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Year</td>
                        @if(array_key_exists('date_of_recipe_YEAR', $recipe))
                            <td class="detailc">{!! $recipe['date_of_recipe_YEAR'][0] !!}</td>
                        @else
                            <td class="detail"></td>
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
                        <td class="detail">{!! $recipe['source_book'][0] !!}</td>
                    </tr>

                    <tr>
                        <td class="topic">Swatch</td>
                        <td class="detail">{!! $recipe['swatch'][0] !!}</td>
                    </tr>
                    <tr>
                        <td class="topic">Discusses quality</td>
                        @if(array_key_exists('discuss_quality', $recipe))
                            <td class="detail">{!! $recipe['discuss_quality'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Mention of costs/prices</td>
                        @if(array_key_exists('costs_prices', $recipe))
                            <td class="detail">{!! $recipe['costs_prices'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr>
                        <td class="topic">Illustration</td>
                        <td class="detail">{!! $recipe['illustration'][0] !!}</td>
                    </tr>
                    <tr>
                        <td class="topic">URC</td>
                        <td class="detail">{!! $recipe['unique_recipe_code'][0] !!}</td>
                    </tr>

                    @if(array_key_exists('unique_recipe_code', $recipe))
                        <?php $file = '/assets/' .$recipe['source_book'][0] . '/' . $recipe['unique_recipe_code'][0] .'.jpg';?>
                        @if(file_exists($file))
                            <tr>
                                <td colspan="2"><a
                                            href="/assets/{!! $recipe['source_book'][0] !!}/{!! $recipe['unique_recipe_code'][0] !!}.jpg">
                                        <img src="/assets/{!! $recipe['source_book'][0] !!}/{!! $recipe['unique_recipe_code'][0] !!}.jpg"
                                             width="700"/></a>
                                </td>
                            </tr>
                        @endif
                    @endif

                </table>
            @endforeach
        @endforeach
    </div>

@endsection