@if (\Request::is('/'))
    <li class="active"><a href="{{ URL::to('/') }}">Project Home</a></li>
@else
    <li><a href="{{ URL::to('/') }}">Project Home</a></li>
@endif

@if (\Request::is('about'))
    <li class="active"><a href="{{ URL::to('/about') }}">The Archive Materials</a></li>
@else
    <li><a href="{{ URL::to('/about') }}">The Archive Materials</a></li>
@endif

@if (\Request::is('database'))
    <li class="active"><a href="{{ URL::to('/database') }}">The Database</a></li>
@else
    <li><a href="{{ URL::to('/database') }}">The Database</a></li>
@endif


@if (\Request::is('technical'))
    <li class="active"><a href="{{ URL::to('/technical') }}">Technical</a></li>
@else
    <li><a href="{{ URL::to('/technical') }}">Technical</a></li>
@endif


@if (\Request::is('search'))
    <li class="active"><a href="{{ URL::to('/search') }}">Search Index</a></li>
@else
    <li><a href="{{ URL::to('/search') }}">Search Index</a></li>
@endif
