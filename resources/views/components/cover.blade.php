<style>
    .card-cover {
      aspect-ratio: 16 / 14; /* Default for mobile screens */
    }
    @media (min-width: 992px) { /* lg screens and up */
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
    @media (min-width: 768px) {
        .card-cover .card-title {
        padding-left: 3rem !important;
        padding-right: 3rem !important;
        }
    }
    @media (min-width: 992px) {
        .card-cover .card-title {
        padding-left: 5rem !important;
        padding-right: 5rem !important;
        }
    }
    @media (min-width: 1200px) {
        .card-cover .card-title {
        padding-left: 7rem !important;
        padding-right: 7rem !important;
        }
    }
   </style>
   
    <div class="card-cover p-4 p-md-5 mb-4 rounded text-body-emphasis position-relative" style="background-image: url('{{ $imageUrl }}'); background-size: cover; background-position: center; overflow: hidden;">
        <a href="{{ route('articles.show', $slug) }}" class="text-decoration-none">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0) 100%);"></div>
            <h1 class="card-title fst-italic text-white px-4 pb-3 mb-3 position-absolute bottom-0 start-0 end-0">{{ $title }}</h1>
        </a>
    </div>