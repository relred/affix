@extends("layouts.bulletin")

@section("title")
  Affix
@endsection

@section("content")
<style>
  .news-card {
      transition: transform 0.3s;
      cursor: pointer;
      height: 100%;
  }
  .news-card:hover {
      transform: scale(1.04);
  }
  .card-img-overlay {
      background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0) 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
  }
  .category {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 0.8rem;
  }
  .card-img {
      object-fit: cover;
      height: 100%;
  }
  .row {
      justify-content: center;
  }
  .col {
      padding: 0 5px;
  }
  @media (min-width: 992px) {
      .newscard-container {
          max-width: 548px;
      }
      .news-card {
          width: 264px;
      }
      .card-img {
          height: 396px;
      }
  }
</style>

  <x-navbar/>

<div class="container newscard-container py-4">
    <div class="row row-cols-1 row-cols-md-2 g-3">

    </div>
</div>

@endsection