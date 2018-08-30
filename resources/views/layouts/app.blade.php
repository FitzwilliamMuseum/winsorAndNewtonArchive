<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ app()->getLocale() }}" lang="{{ app()->getLocale() }}">

<head>
    <!-- Base meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="Shortcut Icon" href="{{ URL::to('/favicon.ico') }}"/>
    <title>@yield('title', 'The Fitzwilliam Museum: Winsor and Newton Archive')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- end of base meta tags -->

    @include('includes.meta')

    <!-- CSS links -->
    <link rel="stylesheet" href="{{ URL::to('/css/layout.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::to('/css/links.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::to('/css/wn.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::to('/css/print.css') }}" type="text/css" media="print"/>
    <!-- End of css links -->

</head>

<body class="two-col wn">

<!-- Accessibility -->
<div id="skip"><a href="#skip-content" accesskey="2">Skip to content</a></div>
<!-- End of Accessibility -->

<div id="header">

    <div id="branding"><a href="http://www.cam.ac.uk/" accesskey="1"><img src="{{ URL::to('/images/identifier.gif') }}"
                                                                          alt="University of Cambridge"
                                                                          class="ucam"/></a><a
                href="http://www.winsornewton.com"><img src="{{ URL::to('/images/archives/wn/WN-logo.png') }}"
                                                        alt="Winsor &amp; Newton"/></a>
    </div>


</div>
<div id="container"><a name="skip-content" id="skip-content"></a>
    <ul id="nav-breadcrumb">
        <li class="first"><a href="http://www.fitzmuseum.cam.ac.uk/">Fitzwilliam Museum</a></li>
        <li><a href="http://www.hki.fitzmuseum.cam.ac.uk">Hamilton Kerr Institute</a></li>
        <li class="last"><a href="http://www.hki.fitzmuseum.cam.ac.uk/archives">Archives</a></li>
    </ul>
    <ul id="nav-primary">
        <li class="title">Winsor &amp; Newton Archive &nbsp;</li>
        <li><a href="http://www.hki.fitzmuseum.cam.ac.uk">Hamilton Kerr Institute</a></li>

        @include('includes.menus')

    </ul>
    <div id="content">

        <div id="sub-brand">
            <p class="section">@section('pageTitle')@show</p>
        </div>
        @yield('content')
        <button id="feedback-form">Feedback</button>
    </div>
    <!-- end contents -->
    <ul id="site-info">
        <li class="copy">&copy;&nbsp;2016 - 2018 Hamilton Kerr Institute, University of Cambridge, CB22 4NE<br/>
            Information provided by <a href="mailto:webmaster@hki.fitzmuseum.cam.ac.uk">webmaster@hki.fitzmuseum.cam.ac.uk</a>.
        </li>
        <li class="link last"><a href="http://www.fitzmuseum.cam.ac.uk/website/cookiepolicy">Privacy</a></li>
    </ul>
</div>
<!-- end container -->
<!-- Add javascript -->
@include('includes.scripts')
<!-- End javascript') -->
</body>
</html>