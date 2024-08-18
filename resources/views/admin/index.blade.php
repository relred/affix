@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <a href="{{ route('articles.create') }}" class="btn btn-success m-3">Crear Nuevo articulo</a>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($articles as $article)
              <x-admin.article-card :article="$article"/>
            @endforeach
          </div>
        </div>
    </div>
</div>
@endsection