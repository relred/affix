
<!doctype html>
<html lang="es" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link rel="canonical" href="@yield('canonical')">
        <meta name="title" content="@yield('title')">
        <meta name="description" content="@yield('description')">
        <meta property="og:site_name" content="YouTube">
        <meta property="og:url" content="@yield('videoUrl')">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:image" content="@yield('imageUrl')">
        <meta property="og:image:width" content="1280">
        <meta property="og:image:height" content="720">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:type" content="video.other">
        <meta property="og:video:url" content="@yield('embedUrl')">
        <meta property="og:video:secure_url" content="@yield('embedUrl')">
        <meta property="og:video:type" content="text/html">
        <meta property="og:video:width" content="1280">
        <meta property="og:video:height" content="720">
        <div id="watch7-content" class="watch-main-col" itemscope itemid="" itemtype="http://schema.org/VideoObject">
            <link itemprop="url" href="@yield('videoUrl')">
            <meta itemprop="name" content="@yield('title')">
            <meta itemprop="description" content="@yield('description')">
            <link itemprop="thumbnailUrl" href="@yield('imageUrl')">
            <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                <link itemprop="url" href="@yield('imageUrl')">
                <meta itemprop="width" content="1280">
                <meta itemprop="height" content="720">
            </span>
            <link itemprop="embedUrl" href="@yield('embedUrl')">
            <meta itemprop="playerType" content="HTML5 Flash">
            <meta itemprop="width" content="1280">
            <meta itemprop="height" content="720">
        </div>


        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="blog.css" rel="stylesheet">
    </head>
    <body>
        <x-navbar/>
        @yield("content")
        <x-responsive-nav/>
    </body>
</html>