@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">

            <div class="card">
                <div class="card-header">Crear articulo</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('articles.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Título</label>
                          <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scrips')

@endsection