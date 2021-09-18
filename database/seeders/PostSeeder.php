<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'id' => Str::uuid(),
            "fake_user" => "Radit",
            'judul'=> "Salah,Vaksin nusantara mampu hancurkan semua jenis virus Corona dengan Efikasi 100%",
            'post' => '<div class="container">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <img src="https://covesia.com/wp-content/uploads/VAKSIN-NUSANTARA-ILS.jpg" alt="blog-thumb"
                                    class="img-fluid w-100">
                            </div>
                            <div class="col-12">
                                <ul class="list-inline">
                                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span
                                            class="font-weight-bold mr-2">Post:</span>Somrat</li>
                                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">August 28, 2017</li>
                                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
                                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-share mr-2"></i>289</li>
                                    <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="#"><i
                                                class="ti-comments mr-2"></i>265</a></li>
                                </ul>
                            </div>
                            <!-- border -->
                            <div class="col-12 mt-4">
                                <div class="border-bottom border-primary"></div>
                            </div>
                            <!-- blog contect -->
                            <div class="col-12 mb-5">
                                <h2>Salah,Vaksin nusantara mampu hancurkan semua jenis virus Corona dengan Efikasi 100% </h2>
                                <p>Tangkapan layar pesan berantai di aplikasi WhatsApp berisi klaim bahwa vaksin Nusantara ampuh 100
                                    persen hancurkan semua jenis virus Corona, beredar di Facebook, pada 6 September 2021.

                                    Dalam tangkapan layar itu, pesan yang tertulis, memuat informasi yang diklaim berasal dari mantan
                                    Menkes Siti Fadilah Supari dengan isi: “Vaksin Nusantara dengan teknologi dendritik diklaim ampuh
                                    100 persen hancurkan semua jenis virus Corona (alpha, beta, delta, delta plus, lambda & jenis virus
                                    lainnya).

                                    Isi pesan berikutnya memuat klaim bahwa tingkat efikasi dan efektivitas sebesar 100 persen, serta
                                    diklaim aman bagi yang memiliki penyakit penyerta (komorbid), anak dan ibu hamil.
                                </p>
                                <h3>Pemeriksaan Fakta</h3>
                                <p>Hasil verifikasi Tempo kepada sejumlah ahli, menunjukkan, bahwa klaim tersebut tidak memiliki basis
                                    ilmiah sesuai prosedur pembuatan vaksin.

                                    Menurut ahli Biologi Molekuler Ahmad Utomo, vaksin Nusantara belum melakukan uji klinis tahap 3.
                                    Sehingga klaim bahwa vaksin Nusantara dapat ampuh hancurkan semua jenis virus Corona dengan efikasi
                                    dan efektivitas 100 persen tidak memiliki rujukan data ilmiah.

                                    “Itu omong kosong karena sama sekali tidak ada bukti uji klinis tahap 3,” kata dia kepada Tempo,
                                    Senin 13 September 2021.
                                    Ketua Komisi Nasional Kejadian Ikutan Pasca Imunisasi (Komnas KIPI) Prof Hindra Irawan Satari, juga
                                    menjelaskan bahwa uji klinis vaksin Nusantara hanya pada tahap 1 yang hanya menjangkau puluhan
                                    orang. Vaksin tersebut belum sampai pada uji klinis fase 2 yang melibatkan seratus orang dan fase 3
                                    terhadap ribuan orang.
                                </p>
                                <p>“Jadi terlalu dini klaim tersebut,” kata dia.
                                    Hindra juga mengingatkan, hasil uji klinis setiap fase harus dipublikasikan di jurnal terpandang.
                                    Hingga saat ini dia belum mengetahui publikasi atas klaim bahwa vaksin Nusantara ampun 100 persen
                                    melawan semua virus Corona, dan aman bagi mereka yang memiliki komorbid, anak dan ibu hamil.
                                </p>

                                <h3>Tahap Pembuatan Vaksin</h3>
                                <p>
                                    Pengembangan vaksin baru membutuhkan sejumlah tahapan kesepakatan internasional. Dikutip dari Pusat
                                    Pencegahan dan Penanganan Penyakit Amerika Serikat, CDC, tahapan pengembangan vaksin baru adalah
                                    tahap eksplorasi, tahap pra-klinis, perkembangan klinis, peninjauan dan persetujuan peraturan,
                                    manufaktur dan kontrol kualitas.

                                    Dalam tahapan klinis atau uji coba pada manusia memuat sejumlah fase. Selama Fase I, sekelompok
                                    kecil orang menerima vaksin percobaan. Pada Fase II, studi klinis diperluas dan vaksin diberikan
                                    kepada orang-orang yang memiliki karakteristik (seperti usia dan kesehatan fisik) yang serupa dengan
                                    mereka yang menjadi sasaran vaksin baru tersebut.

                                    Pada Fase III, vaksin diberikan kepada ribuan orang dan diuji kemanjuran dan keamanannya. Banyak
                                    vaksin menjalani studi formal Fase IV yang sedang berlangsung setelah vaksin disetujui dan
                                    dilisensikan.

                                </p>
                                <h4>Kesimpulan</h4>
                                <p>
                                    Dari pemeriksaan fakta di atas, klaim bahwa vaksin Nusantara ampuh hancurkan semua jenis virus
                                    Corona dengan efektivitas dan efikasi 100 persen adalah keliru. Vaksin Nusantara belum menjalani uji
                                    klinis tahap 3 yang dilakukan terhadap ribuan orang untuk mengetahui tingkat keamanan dan efikasi.
                                    Sel dendritik yang menjadi basis vaksin Nusantara bersifat autologus artinya dari materi yang
                                    digunakan dari diri kita sendiri dan untuk diri kita sendiri, sehingga tidak bisa digunakan untuk
                                    orang lain.

                                </p>
                            </div>
                '
        ]);
    }
}
