<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis position-relative" style="background-image: url('{{ $imageUrl }}'); background-size: cover; background-position: center; overflow: hidden;">
    <a href="{{ route('articles.show', $slug) }}" style="text-decoration: none">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0) 100%);"></div>
        <div class="col-lg-6 px-0 position-relative">
            <h1 class="ml-2 display-4 fst-italic text-white text-justify">{{ $title }}</h1>
            <p class="lead my-3 text-white">{{ $description }}</p>
            <p class="lead mb-0"><a href="{{ route('articles.show', $slug) }}" class="text-white fw-bold">Continuar Leyendo...</a></p>
        </div>
    </a>
</div>
