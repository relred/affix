<div class="main-container">
    <h1>{{ $title }}</h1>
    <div class="editor-container editor-container_inline-editor" id="editor-container">
        <div class="editor-container__editor">
            <div id="editor" wire:ignore></div>
        </div>
    </div>
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
            @json($body),
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

    InlineEditor
        .create(document.querySelector('#editor'), editorConfig)
        .then(editor => {
            editor.model.document.on('change:data', () => {
                // Debounce the Livewire update
                clearTimeout(window.livewireBodyUpdate);
                window.livewireBodyUpdate = setTimeout(() => {
                    @this.set('body', editor.getData());
                    @this.call('save');
                }, 500); // Adjust the debounce time as necessary
            });
        })
        .catch(error => {
            console.error('Error initializing CKEditor:', error);
        });



</script>