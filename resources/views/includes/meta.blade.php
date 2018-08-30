
    <!-- Canonical link -->
    <link rel="canonical" href="{{ URL::current() }}" />

    <!-- Open graph -->
    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ URL::to('/') }}" />
    <meta property="og:site_name" content="The Fitzwilliam Museum/HKI: Winsor and Newton Archive" />
    <meta property="og:image" content="{{ URL::to('/images/archives/wn/WN-logo.png') }}" />

    <!-- Twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:site" content="@yield('twitter_id', '@fitzmuseum_uk')" />
    <meta name="twitter:image" content="{{ URL::to('/images/archives/wn/WN-logo.png') }}" />
    <meta name="twitter:creator" content="@yield('twitter_id', '@fitzmuseum_uk')" />

    <!-- Humans text -->
    <link type="text/plain" rel="author" href="{{ URL::to('/humans.txt') }}" />
