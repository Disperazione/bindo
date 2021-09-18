@extends('layout.master')
@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="blog.html">Our Blog</a>
                    </li>
                    <li class="list-inline-item text-white h3 font-secondary nasted">Blog Details</li>
                </ul>
                <p class="text-lighten">{{ $post->judul }}</p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- blog details -->
<section class="section-sm bg-gray">
    {!! $post->post !!}
</section>
<!-- /blog details -->

<!-- recommended post -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">ALL Comment</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($post->comment as $item)
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <div class="card-body">
                        <!-- post meta -->
                        <div class="list-inline mb-3">
                            <!-- author -->
                            <h4 class="list-inline-item mr-3 ml-0">{{ $item->name }}</h4>
                        </div>
                        <p class="card-text">{{ $item->comment }}</p>
                        <p>By {{ $item->email }}/p>
                    </div>
                </div>
            </article>
            @endforeach

        </div>
    </div>
</section>
<!-- /recommended post -->
@endsection
