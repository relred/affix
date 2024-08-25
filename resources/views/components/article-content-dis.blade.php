@php
  use Illuminate\Support\Carbon;
  Carbon::setLocale('es');
  $date = Carbon::parse($article->created_at)->translatedFormat('l, d \d\e F \d\e Y');

@endphp
<div class="col-md-8" style="margin: auto">
  <img src="{{ $article->imageUrl }}" style="max-width:100%">
  
  <article class="blog-post" style="font-size:20px; text-align:justify;">
    <h2 class="display-5 link-body-emphasis pb-4 mb-4 border-bottom">{{ $article->title }}</h2>
    <h3 class="pb-2 mb-2 fst-italic">
{{--       Internacional --}}
    </h3>
    <p class="blog-post-meta" style="text-transform: capitalize">{{ $date }}</p>
    {!! $article->body !!}
    </article>

    <nav class="blog-pagination my-4" aria-label="Pagination">
      <a class="btn btn-outline-primary rounded-pill" href="#">Más Viejos</a>
      <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Más Nuevos</a>
    </nav>

  </div>
