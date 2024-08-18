<style>
  .card-img-container {
      width: 100%;
      height: 200px;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
  }

  .card-img-top {
      width: auto; 
      height: 100%; 
      object-fit: cover; 
  }
</style>
@php
  use Illuminate\Support\Carbon;
  Carbon::setLocale('es');
  $date = Carbon::parse($article->updated_at)->translatedFormat('l, d \d\e F \d\e Y');

@endphp
<div class="col">
  <div class="card" style="width: 18rem;">
    <div class="card-img-container">
        <img src="{{ $article->imageUrl }}" class="card-img-top">
    </div>
    @if ($article->is_public)
      <div class="card-body">
    @else
      <div class="card-body bg-secondary-subtle">    
    @endif
      <h5 class="card-title">{{ $article->title }}</h5>
      <p class="card-text">{{ $date }}</p>
      <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Administrar</a>

      <!-- SVG Icon for Public/Hidden -->
      <span class="ms-2">
          @if($article->is_public)
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="26" height="26" viewBox="0 0 24 24" stroke-width="2" stroke="#00a000" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
              <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
            </svg>
          @else
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-x" width="26" height="26" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M13 21h-6a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v.5" />
              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
              <path d="M22 22l-5 -5" />
              <path d="M17 22l5 -5" />
            </svg>
          @endif
      </span>
    </div>
  </div>
</div>