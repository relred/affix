@extends("layouts.bulletin")

@section("title")
  Affix
@endsection

@section("content")
    
<x-navbar/>

<main class="container">

    <h2 class="text-center">{{ $category->name }}</h2>
    <div style="margin: auto; max-width:900px;">
        @if(count($articles) > 0)
            <x-recient-articles.feed :feed="$articles"/>
        @else
            <div class="alert alert-light" role="alert">
                No existen artículos de esta categoría
            </div>
        @endif
    </div>

    <x-responsive-nav/>

</main>

<x-footer/>
@endsection