@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif
        <a href="{{ route('admin') }}" class="btn btn-warning m-1">Volver</a>
        <div class="card mb-3">
          <div class="card-header">Controles</div>
          <div class="card-body">
            <a href="{{ route('articles.edit.body', $article->id) }}" class="btn btn-success m-2">Abrir editor</a>
            <form action="{{ route('articles.update.visibility', $article->id) }}" method="POST" style="display: inline;">
              @csrf
              @method('PUT')
              @if ($article->is_public)
                <button type="submit" class="btn btn-secondary m-2">Ocultar</button>
              @else
                <button type="submit" class="btn btn-danger m-2">Publicar</button>
              @endif
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">Información de articulo</div>
            <div class="card-body">
                <img src="{{ $article->imageUrl }}" alt="" style="max-width: 70%; display: block; margin: 0 auto;">

                
                <form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">

                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
                  </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control" id="description" name="description" >{{ $article->description }}</textarea>
                  </div>

                  <div class="mb-3">
                    <label for="image" class="form-label">Imagen de encabezado</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <div class="form-text">Seleccione un archivo de imagen (jpg, png, webp) de un tamaño menor a 1 megabyte.</div>
                  </div>

                  <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <select class="form-select" id="category" name="category" aria-label="Select category">
                      <option selected disabled>Seleccione una categoria</option>
                      <option value="1" {{ $article->category == '1' ? 'selected' : '' }}>Politica</option>
                      <option value="2" {{ $article->category == '2' ? 'selected' : '' }}>Nacional</option>
                      <option value="3" {{ $article->category == '3' ? 'selected' : '' }}>Internacional</option>
                      <option value="4" {{ $article->category == '4' ? 'selected' : '' }}>Estatal</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('scrips')

@endsection