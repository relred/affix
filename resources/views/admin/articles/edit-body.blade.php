<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Affix Publisher</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');

            @media print {
                body {
                    margin: 0 !important;
                }
            }

            .main-container {
                font-family: 'Lato';
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
            }

            .ck-content {
                font-family: 'Lato';
                line-height: 1.6;
                word-break: break-word;
            }

            .editor-container_inline-editor .editor-container__editor {
                min-width: 795px;
                max-width: 795px;
            }

            .back-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #ffc107; /* Bootstrap primary color */
                text-decoration: none;
                border-radius: 11px;
                transition: background-color 0.3s;
                font-weight: bold;
            }

            .back-button:hover {
                background-color: #e0a800; /* Darker shade for hover effect */
            }

            main {
                height: 100vh; /* Full height of the viewport */
                padding-bottom: 50vh; /* Extra padding to allow scrolling */
                box-sizing: border-box; /* Include padding in the height calculation */
                overflow-y: scroll; /* Enable vertical scrolling */
            }

            .sticky-nav {
                position: sticky;
                top: 0;
                z-index: 1000;
                background-color: white;
                padding: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                max-height: 50px; /* Adjust the size as needed */
                margin: 0 auto; /* Center the logo */
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav class="sticky-nav">
            <a href="{{ route('articles.edit', $article->id) }}" class="back-button">Volver</a>
            <img class="logo" style="max-height: 65px; margin: 0 auto;" src="https://res.cloudinary.com/de6hiq5n4/image/upload/v1722749769/assets/pqeb9kt5iixdssq5bebq.jpg" alt="AFFIX">
        </nav>
        <main class="my-8">
            <livewire:article-editor :$article>
        </main>
    </body>
</html>
