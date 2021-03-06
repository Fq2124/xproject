@extends('layouts.xproject.master')
@section('content')
    <!-- Header Section Start -->
    <header id="video-area" data-stellar-background-ratio="0.5">
        <div id="block" data-vide-bg="video/video"></div>
        <div class="fixed-top">
            <div class="container">
                <div class="logo-menu">
                    <a href="/xproject" class="logo"><img src="/img/xproject2.PNG" width="15%"></a>
                    <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
                </div>
            </div>
        </div>
        <div class="overlay overlay-ipc"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Informatics Photography Competition</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Human InTerest"</em></p>
                        @if(Auth::guest())
                            <a href="{{url('register#form')}}" class="btn btn-common wow fadeInUp"
                               data-wow-duration="1000ms"
                               data-wow-delay="400ms">DAFTAR SEKARANG!</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <style>
        .btn-common3 {
            color: #ffffff;
            border: 2px solid #240D4F;
            background-color: #240D4F;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-common3:hover {
            color: #240D4F;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #240D4F;
            transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
        }
        #about .box-item {
            padding-bottom: 0px;
        }
    </style>

    <!-- timeline WDC Section Start -->
    <div id="testimonial" class="section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="touch-slider owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <img src="/img/IFC/regist.png" alt="WDC" />
                            <div class="testimonial-text">
                                <h3>Registrasi dan Pengiriman Karya WDC & IPC</h3>
                                <span>6 September – 25 Oktober 2017</span>
                                <p>Pendaftaran WDC dan IPC dapat dilakukan secara online maupun offline, sedangkan untuk pengiriman karya WDC dan IPC hanya bisa dilakukan secara online.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/CI/juri.png" alt="WDC" />
                            <div class="testimonial-text">
                                <h3>Penilaian WDC & IPC (Juri + Jumlah Like Instagram)</h3>
                                <span>30 Oktober - 09 November 2017</span>
                                <p>Penilaian dilakukan oleh juri untuk menentukan juara umum, dan penilaian dengan like instagram untuk menentukan juara favorit.</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/IC/pengumuman.png" alt="WDC" />
                            <div class="testimonial-text">
                                <h3>Pengumuman Juara WDC & IPC</h3>
                                <span>10 November 2017</span>
                                <p>Pengumuman juara diinformasikan melalui website ini. Namun, pengambilan hadiah waktu CI (Ceremony of Informatics).</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <img src="/img/CI/jazz.jpg" alt="WDC" />
                            <div class="testimonial-text">
                                <h3>CI (Ceremony of Informatics)</h3>
                                <span>25 November 2017</span>
                                <p>Seluruh puncak acara dan pembagian hadiah untuk setiap kategori lomba dilaksanakan pada momen ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- timeline WDC Section Start -->

    <!-- About Section Start -->
    <section id="about" class="section" data-stellar-background-ratio="0.2" style="background: #ffffff;padding-top: 40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="show-box wow fadeInDown animated" data-wow-offset="10">
                        <img src="/img/maskotCI.png">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
                        <div class="box-item right">
                            <div class="text">
                                <p style="font-size: 24px; line-height: 200%"><b>IPC</b> merupakan lomba yang diadakan untuk menggali kemampuan logika di kalangan siswa SMA/SMK sederajat. Jenis lomba ini berbentuk kompetisi logika matematika. Lomba ini memberikan peluang untuk dapat bersaing sampai sejauh mana mereka mengetahui tentang bidang komputer khususnya dalam Logika Matematika.
                                </p>
                            </div>
                        </div>
                        <br>
                        @if(Auth::guest())
                            <div class="box-item right">
                                <div class="text">
                                    <p>
                                        <a href="{{url('register#form')}}" class="btn btn-common3" id="submit">
                                            daftar sekarang
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endif
                        <div class="box-item right">
                            <div class="text">
                                <p>
                                    <a href="{{url('ci/xproject/ipc-rulebook#blog')}}" class="btn btn-common3"
                                       id="submit">
                                        download rulebook
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <section id="contact" class="section" style="padding: 36px 5px 0px 11px;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="contact-block" style="background: #F2F2F2">
                        <div class="section-header">
                            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                                <span>Contact Person</span></h2>
                            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                            <p style="color: black; font-weight: bold">Tap me!<br>
                                <a href="http://line.me/ti/p/~mbohwes908"><img src="/img/LINE_icon01.png" width="40"
                                                                               height="40"></a>
                                <a href="whatsapp://send?text=Hello, Zahid!&phone=+6281343220357&abid=+6281343220357"><img
                                            src="/img/Whatsapp-ios-7-icon.png" width="40" height="40"></a></p>
                            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s" style="color: black;font-weight: bold;font-size: 24px">
                                <b>Zahid</b>: mbohwes908 | 081343220357<br>
                                <b>Medina</b>: medinaamirinnisa | 085931381693
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection