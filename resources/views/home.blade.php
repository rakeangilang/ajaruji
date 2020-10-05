<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ajar Uji</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>

<body class="antialiased">
    {{ $test }}
    @include('layouts.header')
    <section id="section2">
        <div class="hero">
            <div class="row">
                <div class="col-6 hero-content">
                    <h1>{{ $section2->title }}</h1>
                    <h6 class="font-weight-bold">{{ $section2->description }}</h6>
                    <button type="button" class="btn pill-button mulai-btn font-weight-bold">{{ $section2->button}}</button>
                </div>
                <div class="col-6 hero-image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="{{ $section2->logo1x }}">
                        <source media="(min-width: 800px)" srcset="{{ $section2->logo2x }}">
                        <img src="{{ $section2->logo2x }}" alt="Brand logo">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <div class="manfaat">
        <h2>Manfaat yang Kamu Dapatkan</h2>
        <h6>Dapatkan pengalaman belajar terbaik dengan fitur menarik di Ajar Uji</h6>
    </div>
    <div class="row list-manfaat justify-content-center">
        <div class="col-sm-2 parent">
            <img class="image1 ellipse-red" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/bank soal.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">20.000 lebih soal tersedia</div>
            <div class="text-manfaat">Ajar uji memiliki bank soal lengkap, dengan 20.000 lebih soal tersedia.</div>
        </div>
        <div class="col-sm-2 parent">
            <img class="image1 ellipse-orange" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/Group 5.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">Penjelasan yang menarik</div>
            <div class="text-manfaat">Materi disakin dengan cara yang menarik, belajar jadi menyenangkan</div>
        </div>
        <div class="col-sm-2 parent">
            <img class="image1 ellipse-green" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/Group 3.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">Rekam perkembangan</div>
            <div class="text-manfaat">Perkembangan nilai dapat dengan mudah dilihat atau dipantau</div>
        </div>
        <div class="col-sm-2 parent">
            <img class="image1 ellipse-cyan" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/Group 2.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">Penjelasan 4</div>
            <div class="text-manfaat">Ajar uji memiliki bank soal lengkap</div>
        </div>
        <div class="col-sm-2 parent">
            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
            <img class="image2" src="assets/book.png" alt="ellipse">
            <div class="text-manfaat font-weight-bold">Penjelasan 5</div>
            <div class="text-manfaat">Ajar uji memiliki bank soal lengkap</div>
        </div>
    </div>
    <div class="demo">
        <h3 class="font-weight-bold">Demo Ajar Uji</h3>
        <h6 class="font-weight-bold">Uji coba kemampuan kamu dalam menjawab soal Try Out di Ajar Uji</h6>
        <button type="button" class="btn pill-button mulai-btn font-weight-bold">Mulai Uji Coba</button>
    </div>
    <div class="white-section">
        <h2>Apa itu Ajar Uji?</h2>
        <h6>Ajar uji merupakan platform belajar online yang mempermudah siswa, guru, dan sekolah dalam melaksanakan kegiatan belajar dan mengajar. Ajar uji menyediakan kelas online, penjelasan yang disajikan dengan menarik, bank soal, mata pelajaran, dan kurikulum yang lengkap.</h6>
    </div>
    <div id="tentang-carousel" class="owl-carousel owl-theme mt-5">
        <div class="item"><img src="assets/sample.jpg" alt=""></div>
        <div class="item"><img src="assets/sample1.jpg" alt=""></div>
        <div class="item"><img src="assets/sample2.jpg" alt=""></div>
        <div class="item"><img src="assets/sample3.jpg" alt=""></div>
    </div>
    <div class="white-section">
        <h2>Penawaran Terbaik</h2>
        <h6>Dapatkan penawaran menarik untuk akses tak terhingga belajar dengan Ajar Uji.</h6>
    </div>
    <div class="penawaran">
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow" style="width: 18rem; border-radius: 0.5rem;">
                    <div class="card-body">
                        <div class="col parent">
                            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                            <img class="image2" src="assets/monthly.png" alt="ellipse">
                            <h4>Rp39.000/Bulan</h4>
                            <div class="text-manfaat font-weight-bold">Bulanan</div>
                            <div class="text-manfaat">Akses tak terhingga dengan berlangganan bulanan di Ajar Uji.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <img class="promo" src="assets/Path 6712.png" alt="">
                        <p class="promo-text font-weight-bold">Penawaran Terbaik</p>
                        <div class="col parent">
                            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                            <img class="image2" src="assets/yearly.png" alt="ellipse">
                            <h4>Rp29.000/Bulan</h4>
                            <div class="text-manfaat font-weight-bold">Tahunan</div>
                            <div class="text-manfaat">Penawaran terbaik dengan berlangganan selama setahun.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <div class="col parent">
                            <img class="image1 ellipse-blue" src="assets/Ellipse 281.png" alt="ellipse">
                            <img class="image2" src="assets/group.png" alt="ellipse">
                            <h4>Rp550.000/Bulan</h4>
                            <div class="text-manfaat font-weight-bold">Grup</div>
                            <div class="text-manfaat">Belajar bersama Ajar Uji bersama teman lebih menarik.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-section">
        <h2>Mengapa Memilih Ajar Uji?</h2>
        <h6>Ajar uji memiliki banyak keunggalan yang menjadi pilihan terbaik. Berikut kata mereka yang telah bergabung dan belajar dengan Ajar Uji:</h6>
    </div>
    <div id="testimoni-section">
        ini card testimoni
        @include('layouts.infinite-carousel')
    </div>
    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
    <script>
        jQuery(document).ready(function($) {
            $('#tentang-carousel').owlCarousel({
                loop: true,
                margin: 20,
                stagePadding: 50,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })

        jQuery(document).ready(function($) {
            $('#testimoni-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        })
    </script>
</body>

</html>