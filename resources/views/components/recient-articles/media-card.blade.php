<style>
    .news-card {
        transition: transform 0.3s;
        cursor: pointer;
        height: 100%;
    }
    .news-card:hover {
        transform: scale(1.03);
    }
    .card-img-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }
    .category {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.8rem;
    }
    .card-img {
        object-fit: cover;
        height: 100%;
    }
    .row {
        justify-content: center;
    }
    .col {
        padding: 0 5px;
    }
    @media (min-width: 992px) {
        .newscard-container {
            max-width: 580px;
        }
        .news-card {
            width: 264px;
        }
        .card-img {
            height: 396px;
        }
    }
</style>

<div class="col">
    <a href="{{ route('articles.show', $article->slug) }}" class="card news-card text-white">
        @if ($article->cover_image)
            <img src="{{ $article->cover_image }}" class="card-img">
        @else
            <img src="{{ $article->imageUrl }}" class="card-img">
        @endif
        <div class="card-img-overlay">
            <h5 class="card-title">{{ $article->title }}</h5>
            <span class="category">{{ $article->getCategoryName() }}</span>
        </div>
    </a>
</div>