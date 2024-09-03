<div class="position-sticky" style="top: 2rem;">
    <h4 class="fst-italic">Recientes</h4>
    <div class="container newscard-container py-4">
        <div class="row row-cols-1 row-cols-md-2 g-3">
            @foreach ($feed as $article)
            <x-recient-articles.media-card :$article/>            
            @endforeach    
        </div>
    </div>    
</div>