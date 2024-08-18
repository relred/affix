<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $category }}</strong>
        <h3 class="mb-0">{{ $title }}</h3>
        <div class="mb-1 text-body-secondary">{{ $date }}</div>
        <p class="card-text mb-auto">{{ $description }}</p>
        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
          Continuar Leyendo
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="{{ $imageUrl }}" width="200" height="250" alt="Thumbnail" class="bd-placeholder-img" style="object-fit: cover;">
      </div>
    </div>
</div>
