@extends("layouts.bulletin")

@section("title")
  Affix
@endsection

@section("content")
    
<x-navbar/>

<main class="container">

  <x-cover 
  slug="{{ $cover->slug }}"
  imageUrl="{{ $cover->imageUrl }}"
  title="{{ $cover->title }}"
  description="{{ $cover->description }}"/>

{{--   <div class="row mb-2">
    <x-news-card
      imageUrl="https://imagenes.elpais.com/resizer/v2/O6ZLI7KQHBESHI62JP7V6FWG5E.jpg?auth=b460901d76d27e1a948f873845a3f51499f201f666e09828863b63f08045c07e&width=1200"
      title="Elecciones en Venezuela: ¿Qué países se posicionan contra la reelección de Maduro?"
      description="No son pocos los países que actualmente no reconocen a Nicolás Maduro como el siguiente presente de Venezuela"
      date="02-07-2024"
      category="Internacional"/>

      <x-news-card
      imageUrl="https://imagenes.elpais.com/resizer/v2/O6ZLI7KQHBESHI62JP7V6FWG5E.jpg?auth=b460901d76d27e1a948f873845a3f51499f201f666e09828863b63f08045c07e&width=1200"
      title="Elecciones en Venezuela: ¿Qué países se posicionan contra la reelección de Maduro?"
      description="No son pocos los países que actualmente no reconocen a Nicolás Maduro como el siguiente presente de Venezuela"
      date="02-07-2024"
      category="Internacional"/>
  </div> --}}

  <div style="margin: auto; max-width:900px;">
    <div class="">
      <x-recient-articles.feed :feed="$feed"/>
    </div>
  </div>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p class="mb-0">
    <a href="#">Volver</a>
  </p>
</footer>
@endsection