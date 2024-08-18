<li>
    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border" href="{{ route('articles.show', $slug) }}">
        <img src="{{ $imageUrl }}" alt="" class="bd-placeholder-img" width="100%" height="auto">
        <div class="col-lg-8 p-2">
            <h6 class="mb-0">{{ $title }}</h6>
            <small class="text-body-secondary">{{ $date }}</small>
            <p class="m-1">{{ $description }}</p>
        </div>
    </a>
    
</li>