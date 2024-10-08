@extends('layouts.article')


@section('canonical'){{ url()->current() }}@endsection

@section('title'){{ $article->title }}@endsection

@section('description'){{ $article->description }}@endsection

@section('imageUrl'){{ $article->imageUrl }}@endsection

@section('videoUrl')
@endsection

@section('embedUrl')
@endsection

@section('content')
<main class="container">
    <x-article-content :$article/>
</main>
@endsection