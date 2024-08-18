<div class="position-sticky" style="top: 2rem;">
    <h4 class="fst-italic">Recientes</h4>
    <ul class="list-unstyled">
        @foreach ($feed as $article)
        <x-recient-articles.card
            slug="{{ $article->slug }}"
            imageUrl="{{ $article->imageUrl }}"
            title="{{ $article->title }}"
            date="{{ $article->created_at }}"
            description="{{ $article->description }}"/>            
        @endforeach
    </ul>
</div>