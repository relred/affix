<style>
    .image-container {
    width: 100%;
    max-width: 100%;
    height: auto;
    overflow: hidden;
    }

    .img-fluid {
    width: 100%;
    height: auto;
    object-fit: cover;
    }

    @media (min-width: 992px) {  /* This is typically the 'lg' breakpoint */
    .image-container {
        width: 200px;
        height: 150px;
    }
    
    .content-container {
        width: calc(100% - 200px - 1rem);  /* Subtracting image width and gap */
    }
    }
</style>

<li class="mt-4">
    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border bg-white rounded-md" href="{{ route('articles.show', $slug) }}">
        <div class="image-container">
            <img src="{{ $imageUrl }}" alt="" class="bd-placeholder-img img-fluid">
        </div>
        <div class="col-lg-8 p-2">
            <h6 class="mb-0">{{ $title }}</h6>
            <small class="text-body-secondary">{{ $date }}</small>
            <p class="m-1">{{ $description }}</p>
        </div>
    </a>
</li>