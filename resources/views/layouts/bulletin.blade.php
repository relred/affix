
<!doctype html>
<html lang="es" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield("title")</title>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="blog.css" rel="stylesheet">
        <style>
            body {
                background-image: url('https://i.postimg.cc/LsVDW4FJ/Whats-App-Image-2024-08-20-at-18-26-16.jpg');
                background-size: cover;
                background-attachment: fixed;
            }
          </style>
    </head>
    <body>
        @yield("content")
    </body>
</html>