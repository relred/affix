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

  <x-responsive-nav/>

</main>

<footer class="py-5 text-center  bg-black">
  <p class="mb-0">
    <a style="text-decoration: none" class="text-white" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-up-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="2.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M10.586 3l-6.586 6.586a2 2 0 0 0 -.434 2.18l.068 .145a2 2 0 0 0 1.78 1.089h2.586v7a2 2 0 0 0 2 2h4l.15 -.005a2 2 0 0 0 1.85 -1.995l-.001 -7h2.587a2 2 0 0 0 1.414 -3.414l-6.586 -6.586a2 2 0 0 0 -2.828 0z" stroke-width="0" fill="currentColor" />
      </svg>
    </a>
  </p>
</footer>
@endsection