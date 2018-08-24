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
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  Original Recipe Name] body=[Name of entry as it appears in the original manuscript]">
                        <td class="topic">Original Recipe Name</td>
                        <td class="detail"><b>{!! $recipe['recipe_name_original'][0] !!}</b></td>
                    </tr>
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  Recipe Name Interpreted] body=[The subject or title of the recipe, expressed in current terminology.]">
                        <td class="topic">Recipe Name interpreted</td>
                        <td class="detail"><b>{!! $recipe['recipe_name_interpreted'][0] !!}</b></td>
                    </tr>
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  Topics] body=[Major themes: e.g. adhesives, canvas, dryers, grounds, ink, oil paint manufacture, pigment manufacture, varnish.]">
                        <td class="topic">Topics</td>
                        <td class="detail">{!! $recipe['topic_sum'][0] !!}</td>
                    </tr>
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  Sub Topics] body=[Minor themes, specific materials: e.g. chrome yellow, permanant white, bitumen, cochineal.]">
                        <td class="topic">Sub Topics</td>
                        @if(array_key_exists('subtopic_sum', $recipe))
                            <td class="detail">{!! $recipe['subtopic_sum'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  Named Individuals] body=[Lists any people identified in the item.]">
                        <td class="topic">Named Individuals</td>
                        @if(array_key_exists('named_individuals_sum', $recipe))
                            <td class="detail">{!! $recipe['named_individuals_sum'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  Year] body=[Some records have a date associated with them. If it exists it is shown here.]">
                        <td class="topic">Year</td>
                        @if(array_key_exists('date_of_recipe_YEAR', $recipe))
                            <td class="detailc">{!! $recipe['date_of_recipe_YEAR'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr title="header=[<img src='/images/archives/wn/info.gif\'>  restriction] body=[Some records have been identified as being commercially sensitive.<br /> In order to access the full record for commercially sensitive items it may be necessary to pursue further permission from Winsor &amp; Newton.]">
                        <td class="topic">Restriction</td>

                    </tr>
                    <tr title="body=[Each book has been assigned a unique two character identifier which is used to refer to the book.]">
                        <td class="topic">Source Book code</td>
                        <td class="detail">{!! $recipe['source_book'][0] !!}</td>
                    </tr>

                    <tr title="body=[Some records contain painted out samples. If they exist for this record they are mentioned here.]">
                        <td class="topic">Swatch</td>
                        <td class="detail">{!! $recipe['swatch'][0] !!}</td>
                    </tr>
                    <tr title="body=[Does the record directly discuss the quality (of the paint).]">
                        <td class="topic">Discusses quality</td>
                        @if(array_key_exists('discuss_quality', $recipe))
                            <td class="detail">{!! $recipe['discuss_quality'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr title="body=[Does the item record any financial material.]">
                        <td class="topic">Mention of costs/prices</td>
                        @if(array_key_exists('costs_prices', $recipe))
                            <td class="detail">{!! $recipe['costs_prices'][0] !!}</td>
                        @else
                            <td class="detail"></td>
                        @endif
                    </tr>
                    <tr title="body=[Are any images associated with this record?]">
                        <td class="topic">Illustration</td>
                        <td class="detail">{!! $recipe['illustration'][0] !!}</td>
                    </tr>
                    <tr title="body=[Each record is assigned a unique code.<br />This identifies its originating book, page number and line number.]">
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