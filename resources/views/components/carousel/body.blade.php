<div id="featuredArticlesCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach($carousel as $index => $article)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
          <x-cover 
          slug="{{ $article->slug }}"
          imageUrl="{{ $article->imageUrl }}"
          title="{{ $article->title }}"
          description="{{ $article->description }}"/>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#featuredArticlesCarousel" data-bs-slide="prev" style="width: 6%;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#featuredArticlesCarousel" data-bs-slide="next" style="width: 6%">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
</div>