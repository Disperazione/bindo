@extends('layout.master')
@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="https://images.unsplash.com/reserve/uZYSV4nuQeyq64azfVIn_15130980706_64134efc6e_o.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <ul class="list-inline custom-breadcrumb mb-3">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">
            VISCO adalah salah satu pionir media online di XII RPL 1, ketika pertama kali hadir di Internet pada 15
                    September 2021 dengan nama VISCO Online.
                    Mulanya, VISCO Online yang diakses dengan alamat http://127.0.0.1:8000/ hanya menampilkan replika dari berita-berita
                    harian VISCO yang terbit hari itu.
        </p>
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
