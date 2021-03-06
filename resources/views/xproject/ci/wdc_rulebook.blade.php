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
        <div class="overlay overlay-wdc"></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="contents text-center">
                        <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Wallpaper Design
                            Competition</h1>
                        <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><em>"Make IT
                                Easy"</em></p>
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

    <!-- Blog Section -->
    <section id="blog" class="section">
        <!-- Container Starts -->
        <div class="container">
            <div class="row">
                <div data-configid="30951858/52737514" style="width:100%; height:1000px;" class="issuuembed"></div>
                <script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
        </div>
    </section>
    <!-- blog Section End -->
@endsection