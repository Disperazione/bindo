@extends('layout.master')
@section('content')
<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80">
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
                        <a href="/news" class="btn btn-primary btn-sm">Lihat Disini</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInDown" data-delay-in=".1">Ingin lihat berita yang sedang ramai dibicarakan?</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
                        Cek berita ter-update di web kami.</p>
                        <a href="/news" class="btn btn-primary btn-sm">Cek Disini</a>
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
                <h2 class="section-title">About Us</h2>
                <p>
                    VISCO adalah salah satu pionir media online di XII RPL 1, ketika pertama kali hadir di Internet pada 15
                    September 2021 dengan nama VISCO Online.
                    Mulanya, VISCO Online yang diakses dengan alamat http://127.0.0.1:8000/ hanya menampilkan replika dari berita-berita
                    harian VISCO yang terbit hari itu.
                    <br><br>
                    Tujuannya adalah memberikan layanan kepada para pembaca harian VISCO di tempat-tempat yang sulit dijangkau oleh
                    jaringan distribusi VISCO. Dengan hadirnya VISCO Online, para pembaca harian VISCO terutama di Indonesia bagian
                    timur dan di luar negeri dapat menikmati harian VISCO hari itu juga, tidak perlu menunggu beberapa hari seperti
                    biasanya.
                    <br><br>
                    Melihat potensi dunia digital yang besar, VISCO Online kemudian dikembangkan menjadi sebuah unit bisnis
                    tersendiri di bawah bendera PT RodiBersama (RB) pada 19 September 2021.
                    <br><br>
                    Pengunjung VISCO meningkat pesat seiring dengan tumbuhnya pengguna Internet di Indonesia. Mengakses informasi
                    dari Internet kini telah menjadi bagian tak terpisahkan dari hidup kita sehari-hari. Dunia digital pun terus
                    berubah dari waktu ke waktu.
                    <br><br>
                    Pada 20 September 2008, portal berita ini me-rebranding dirinya untuk lebih berkembang, Kanal-kanal berita ditambah.
                    Produktivitas sajian berita ditingkatkan demi memberikan sajian informasi yang update dan aktual kepada para
                    pembaca. VISCO ingin menegaskan bahwa portal berita ini ingin hadir di tengah pembaca sebagai
                    acuan bagi jurnalisme yang baik di tengah derasnya aliran informasi yang tak jelas kebenarannya.
                </p>
                {{-- <a href="about.html" class="btn btn-primary-outline">Learn more</a> --}}
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0" style="margin-top: -40px;padding-left: 90px;">
                <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80" alt="about image">
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
