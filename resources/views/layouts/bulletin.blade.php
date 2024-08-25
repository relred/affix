
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

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2JKKHPJ2HK"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-2JKKHPJ2HK');
        </script>
        
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <style>
            body {
                background-image: url('https://i.postimg.cc/LsVDW4FJ/Whats-App-Image-2024-08-20-at-18-26-16.jpg');
                background-size: cover;
                background-attachment: fixed;
                padding-bottom: 20vh;
            }
          </style>
    </head>
    <body>
        @yield("content")
    </body>
</html>