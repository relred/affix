<div class="card">
    <img src="{{ $article->imageUrl }}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        {{ $slot }}
    </div>
</div>