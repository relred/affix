@extends('layouts.article')


@section('canonical')

@endsection

@section('title')
    {{ $article->title }}
@endsection

@section('description')
    Niclas
@endsection

@section('imageUrl')
@endsection

@section('videoUrl')
@endsection

@section('embedUrl')
@endsection

@section('content')
<main class="container">
    <x-article-content :$article/>
</main>
@endsection