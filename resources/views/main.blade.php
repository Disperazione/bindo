@extends('layout.master')
@section('content')
<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
    <div class="container">
        <div class="hero-slider">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Lihat Berita
                        Dengan Mudah</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                        Baca berita dimana saja kapan saja dengan mudah </p>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInDown" data-delay-in=".1">Berita Aktual Dan Faktual</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
                        Menyediakan berita yang Fakta dan akurat kepada Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about us -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="section-title">About VISCO</h2>
                <p>
                   Didirikan pada tahun 2020,VISCO mempunyai tujuan untuk membantu masyarakat dalam membaca berita yang aktual
                   dan juga faktual
                </p>
                <p>
                   Kami juga memberikan kenyamanan pada anda saat membaca berita 
                </p>
                {{-- <a href="about.html" class="btn btn-primary-outline">Learn more</a> --}}
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100" src="https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2016/10/situs-berita-startup-featured.png"
                    alt="about image">
            </div>
        </div>
    </div>
</section>
<!-- /about us -->

<!-- success story -->
{{-- <section class="section bg-primary" data-background="images/backgrounds/success-story.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-4  success-video">
                <img class="img-fluid " style="height: 450px;width:1000px;"
                    src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2021/02/d2d552aef0aa67c104ae96d41b3d8efa.jpg"
                    alt="about image">
            </div>
            <div class="col-lg-6 col-sm-8">
                <div class="bg-white p-5">
                    <h3 class="section-title">Pemeriksaan Fakta</h3>
                    <p>Hasil verifikasi Tempo kepada sejumlah ahli, menunjukkan, bahwa klaim tersebut tidak memiliki
                        basis ilmiah sesuai prosedur pembuatan vaksin. </p>
                    <p>
                        Menurut ahli Biologi Molekuler Ahmad Utomo, vaksin Nusantara belum melakukan uji klinis tahap 3.
                        Sehingga klaim bahwa vaksin Nusantara dapat ampuh hancurkan semua jenis virus Corona dengan
                        efikasi dan efektivitas 100 persen tidak memiliki rujukan data ilmiah.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- /success story -->




@endsection
