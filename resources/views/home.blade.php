@extends("layouts.bulletin")

@section("title")
  Affix
@endsection

@section("content")
    
<x-navbar/>

<main class="container">

  <x-carousel.body :$carousel/>

  <div style="margin: auto; max-width:900px;">
    <div class="">
      <x-recient-articles.feed :feed="$feed"/>
    </div>
  </div>

  <x-responsive-nav/>

</main>

<x-footer/>
@endsection