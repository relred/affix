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

        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <main class="mt-6">
            <div class="main-container">
                <h1>Hola a todos</h1>
                <div class="editor-container editor-container_inline-editor" id="editor-container">
                    <div class="editor-container__editor">
                        <div id="editor"></div>
                    </div>
                </div>
                <input name="content" id="content">
            </div>

            <script type="importmap">
                {
                    "imports": {
                        "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                        "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                    }
                }
            </script>
            <script type="module">
                import {
                    InlineEditor,
                    AccessibilityHelp,
                    Autoformat,
                    AutoLink,
                    Autosave,
                    BalloonToolbar,
                    Bold,
                    Essentials,
                    Heading,
                    Italic,
                    Link,
                    Paragraph,
                    SelectAll,
                    Table,
                    TableToolbar,
                    TextTransformation,
                    Underline,
                    Undo
                } from 'ckeditor5';

                import translations from 'ckeditor5/translations/es.js';

                const editorConfig = {
                    toolbar: {
                        items: [
                            'undo',
                            'redo',
                            '|',
                            'selectAll',
                            '|',
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'underline',
                            '|',
                            'link',
                            'insertTable',
                            '|',
                            'accessibilityHelp'
                        ],
                        shouldNotGroupWhenFull: false
                    },
                    plugins: [
                        AccessibilityHelp,
                        Autoformat,
                        AutoLink,
                        Autosave,
                        BalloonToolbar,
                        Bold,
                        Essentials,
                        Heading,
                        Italic,
                        Link,
                        Paragraph,
                        SelectAll,
                        Table,
                        TableToolbar,
                        TextTransformation,
                        Underline,
                        Undo
                    ],
                    balloonToolbar: ['bold', 'italic', '|', 'link'],
                    heading: {
                        options: [
                            {
                                model: 'heading1',
                                view: 'h2',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h3',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            },
                            {
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            }
                        ]
                    },
                    initialData:
                        '',
                    language: 'es',
                    link: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        decorators: {
                            toggleDownloadable: {
                                mode: 'manual',
                                label: 'Downloadable',
                                attributes: {
                                    download: 'file'
                                }
                            }
                        }
                    },
                    placeholder: 'Pegue o comiece a escribir su articulo aquí',
                    table: {
                        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                    },
                    translations: [translations]
                };

                //InlineEditor.create(document.querySelector('#editor'), editorConfig);
                InlineEditor
                    .create(document.querySelector('#editor'), editorConfig)
                    .then(editor => {
                        editor.model.document.on('change:data', () => {
                            document.querySelector('#content').value = editor.getData();
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });

            </script>
        </main>
    </body>
</html>
