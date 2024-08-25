<style>
    .card-cover {
        aspect-ratio: 16 / 14;  /* Default for mobile screens */
    }

    @media (min-width: 992px) {  /* lg screens and up */
        .card-cover {
            aspect-ratio: 16 / 7;
        }
    }

    .card-cover h1 {
        font-size: clamp(1.5rem, 4vw, 2.5rem);
        line-height: 1.2;
        max-height: 3.6em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    
    .card-cover .description-text {
        font-size: clamp(1rem, 2vw, 1.25rem);
        max-height: 4.5em;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>

<div class="card-cover p-4 p-md-5 mb-4 rounded text-body-emphasis position-relative" style="background-image: url('{{ $imageUrl }}'); background-size: cover; background-position: center; overflow: hidden;">
    <a href="{{ route('articles.show', $slug) }}" class="text-decoration-none">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0) 100%);"></div>
        <div class="col-lg-6 px-0 position-relative h-100 d-flex flex-column justify-content-center">
            <h1 class="ml-2 display-4 fst-italic text-white">{{ $title }}</h1>
            <p class="lead my-3 text-white description-text">{{ $description }}</p>
            <p class="lead mb-0"><a href="{{ route('articles.show', $slug) }}" class="text-white fw-bold">Continuar Leyendo...</a></p>
        </div>
    </a>
</div>
