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
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future
                            is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight"
                            data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                            data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                            data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5"
                            data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown"
                            data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply
                            now</a>
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
                <h3 class="section-title">Salah,Vaksin nusantara mampu hancurkan semua jenis virus Corona dengan Efikasi
                    100%</h3>
                <p>
                    Tangkapan layar pesan berantai di aplikasi WhatsApp berisi klaim bahwa vaksin Nusantara ampuh 100
                    persen hancurkan semua jenis virus Corona, beredar di Facebook, pada 6 September 2021.
                </p>
                <p>
                    Dalam tangkapan layar itu, pesan yang tertulis, memuat informasi yang diklaim berasal dari mantan
                    Menkes Siti Fadilah Supari dengan isi: “Vaksin Nusantara dengan teknologi dendritik diklaim ampuh
                    100 persen hancurkan semua jenis virus Corona (alpha, beta, delta, delta plus, lambda & jenis virus
                    lainnya).
                </p>
                <p>
                    Isi pesan berikutnya memuat klaim bahwa tingkat efikasi dan efektivitas sebesar 100 persen, serta
                    diklaim aman bagi yang memiliki penyakit penyerta (komorbid), anak dan ibu hamil.
                </p>
                {{-- <a href="about.html" class="btn btn-primary-outline">Learn more</a> --}}
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100" src="https://cdn.tmpo.co/data/2021/09/13/id_1050561/1050561_720.jpg"
                    alt="about image">
            </div>
        </div>
    </div>
</section>
<!-- /about us -->

<!-- success story -->
<section class="section bg-primary" data-background="images/backgrounds/success-story.jpg">
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
                    <p>
                        “Itu omong kosong karena sama sekali tidak ada bukti uji klinis tahap 3,” kata dia kepada Tempo,
                        Senin 13 September 2021.
                        Ketua Komisi Nasional Kejadian Ikutan Pasca Imunisasi (Komnas KIPI) Prof Hindra Irawan Satari,
                        juga menjelaskan bahwa uji klinis vaksin Nusantara hanya pada tahap 1 yang hanya menjangkau
                        puluhan orang. Vaksin tersebut belum sampai pada uji klinis fase 2 yang melibatkan seratus orang
                        dan fase 3 terhadap ribuan orang.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <h3 class="section-title">Kesimpulan</h3>
                <p>
                    Dari pemeriksaan fakta di atas, klaim bahwa vaksin Nusantara ampuh hancurkan semua jenis virus
                    Corona dengan efektivitas dan efikasi 100 persen adalah keliru. Vaksin Nusantara belum menjalani uji
                    klinis tahap 3 yang dilakukan terhadap ribuan orang untuk mengetahui tingkat keamanan dan efikasi.
                </p>
                <p>
                    Sel dendritik yang menjadi basis vaksin Nusantara bersifat autologus artinya dari materi yang
                    digunakan dari diri kita sendiri dan untuk diri kita sendiri, sehingga tidak bisa digunakan untuk
                    orang lain.
                </p>
                {{-- <a href="about.html" class="btn btn-primary-outline">Learn more</a> --}}
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100"
                    src="https://www.lensaindonesia.com/wp-content/uploads/2021/08/vaksin-nusantara.jpg"
                    alt="about image">
            </div>
        </div>
    </div>
    </div>
    <!-- mobile see all button -->

    </div>
</section>
@endsection
