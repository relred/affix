@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($carousel as $article)
            <div class="col-md-2">
                <x-admin.carousel-card :$article>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carouselModal">
                        Cambiar artículo
                    </button>
                </x-admin.carousel-card>
            </div>
        @endforeach
    </div>
</div>

<div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="carouselModalLabel">Seleccionar artículo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-flex flex-wrap">
                @foreach ($latest as $article)
                    <div class="p-2" style="flex: 0 0 50%;">
                        <x-admin.carousel-card :$article/>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
  
  
@endsection