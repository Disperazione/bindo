@extends('layout.master')
@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blogs -->
<section class="section">
  <div class="container">
   @foreach ($post as $item)
        <div class="row">
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="https://covesia.com/wp-content/uploads/VAKSIN-NUSANTARA-ILS.jpg" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">20 september 2021</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By {{ $item->fake_user }}</li>
            </ul>
            <a href="/news">
              <h4 class="card-title">{{ $item->judul }}</h4>
            </a>
            <p class="card-text"></p>
            <a href="/news/{{ $item->id }}" class="btn btn-primary btn-sm">read more </a>
          </div>
        </div>
      </article>
    </div>
   @endforeach
  </div>
</section>
<!-- /blogs -->
@endsection
