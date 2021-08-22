<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Invitee</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/frontend/template/')}}/img/favicon.png" rel="icon">
    <link href="{{ asset('/frontend/template/')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('/frontend/template/')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/frontend/template/')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/frontend/template/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/frontend/template/')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/frontend/template/')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/frontend/template/')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/frontend/template/')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Template Main CSS File -->
    <link href="{{ asset('/frontend/template/')}}/css/style.css?v=1.0.1" rel="stylesheet">
    <style>
        .modal-content {
            background-size: 50%;
            height: 400px;
            background-image: url({{ asset('/frontend/template/img/border-corner2.png') }}), url({{ asset('/frontend/template/img/border-corner-bottom.png') }});
            background-position: top right, bottom left;
            background-repeat: no-repeat, no-repeat;
            background-size: 20%, 20%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            // document.addEventListener('contextmenu', event => event.preventDefault()); // disable klik kanan
            $("#exampleModalCenter").modal({backdrop: 'static', keyboard: false});
            $("#exampleModalCenter").modal('show');
            $(".btn-cls").click(function () {
                $('#exampleModalCenter').modal('hide'); //or  $('#IDModal').modal('hide');
            });
        });
    </script>

    <!-- =======================================================
    * Template Name: Restaurantly - v3.3.0
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

{{--<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">--}}
<body>
@php
    if( request()->query('kepada') != "" ){
        $param = request()->query('kepada');
    }else{
        $param = "Saudara/i";
    }
@endphp
<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
{{--    Launch demo modal--}}
{{--</button>--}}
<div class="col-12 ">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
            <div class="container" data-aos="fade-up">
                <div class="d-flex justify-content-center m-1">
                    <img src="{{ asset('/frontend/template/img/cover-dpn.jpg') }}" alt="" style="width: 50%; height: 50%; border-radius: 60%;margin-top: 10%">
                </div>
                <div class="d-flex justify-content-center m-1" style="font-family: Courgette">
                    Kepada Yth:
                </div>

                <div class="d-flex justify-content-center" style="font-family: Courgette">
                    Bpk/Ibu/Saudara/i
                </div><br>

                <div class="section-title d-flex justify-content-center">
                    @if(isset($param))
                        <h1><b>{{ ucfirst($param) }}</b></h1>
                    @else
                        ....
                    @endif
                </div>

                <div class="section-title d-flex justify-content-center mt-auto" style="font-family: Courgette">
                    <button type="button" class="btn btn-md btn-rounded btn-cls" id="playPauseBTN" onclick="playPause()" data-dismiss="modal" style="background: #00506a;color: white">Buka Undangan</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <nav class="mobile-bottom-nav">
            @foreach($menu as $menus)
                <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
                    <div class="mobile-bottom-nav__item-content">
                        <a href="#{{ $menus->slug }}">{!! $menus->icon !!}<br>{{ $menus->nama_menu }}</a>
                    </div>
                </div>
            @endforeach
        </nav>

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background:url( '../upload_img/{{$form->foto_sampul}}' );background-repeat: no-repeat;background-attachment: fixed;background-size: 10% 20%; background-position: center; background-repeat: no-repeat; background-size: cover; object-fit: fill; object-position: 20% 10%; ">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>{{ ucfirst($form->nama_panggilan_p) }} <span>& {{ ucfirst($form->nama_panggilan_w) }}</span></h1>
                </div>
                <div class="col-lg-4 mt-2 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                    <h3 style="color: #ffffff"> "" Ya Allah, dengan segala kesucian hati, kami bersujud memohon ridho-Mu, untuk menuju sunnah rasul-Mu membentuk keluarga yang sakinah, mawadah dan warohmah ""</h3>
                </div>

            </div>
        </div>

        <section>
            <div class="custom-shape-divider-bottom-1629582647">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>
    </section><!-- End Hero -->



{{--    <section id="menu" class="events" style="background:url('{{ asset('/frontend/template/') }}/img/cover2.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 10% 20%; background-position: center; background-repeat: no-repeat; background-size: cover; object-fit: fill; object-position: 20% 10%; ">--}}
    <section id="menu" class="events">
{{--        <section class="event">--}}
{{--            <div class="custom-shape-divider-top-1629582605">--}}
{{--                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>--}}
{{--                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>--}}
{{--                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}
{{--        </section>--}}
        <div class="container" data-aos="fade-up">
            <div class="section-title d-flex justify-content-center mb-3">
                <h1>Kami yang berbahagia</h1>
            </div>

            <div class="swiper-slide">
                <div class="row event-item">
                    <div class="col-lg-5">
                        <img src="{{ asset('/upload_img/')}}/{{ $form->foto_w }}" class="img-fluid" alt="" style="float: left">
                        <p class="fst-italic" style="font-size: 13px"><h3 class="text-center">{{ ucfirst($form->nama_lengkap_w) }}</h3> <h5 class="text-center"> Puteri dari Bapak {{ $form->nama_ortu_w_p }} dan Ibu {{ $form->nama_ortu_w_w }}</h5></p>
                    </div>

                    <div class="col-lg-2 centered">
                        <div class="row center-margin">
                            <img src="{{ asset('/frontend/template/')}}/img/and_sc copy.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <img src="{{ asset('/upload_img/')}}/{{ $form->foto_w }}" class="img-fluid" alt="" style="float: left">
                        <p class="fst-italic" style="font-size: 13px"><h3 class="text-center">{{ ucfirst($form->nama_lengkap_p) }}</h3> <h5 class="text-center"> Putera dari Bapak {{ $form->nama_ortu_p_p }} dan Ibu {{ $form->nama_ortu_p_w }}</h5></p>
                    </div>
                </div>
            </div><!-- End testimonial item -->
            <div class="swiper-pagination"></div>
        </div>
{{--        <div class="custom-shape-divider-bottom-1629581971">--}}
{{--            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">--}}
{{--                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>--}}
{{--                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>--}}
{{--                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>--}}
{{--            </svg>--}}
{{--        </div>--}}
    </section><!-- End Events Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="about" class="why-us" style="background-image: url({{ asset('/frontend/template/img/gambar/1copy.png') }}); background-position: top; background-repeat: no-repeat; background-size: auto;">
        <br><br><br><br><br>
        <div class="container" data-aos="fade-up">

            <div class="section-title d-flex justify-content-center">
                <!-- <h2>Why Us</h2> -->
                <h1>Assalamu'alaikum Wr. Wb</h1>
                <!-- <h1 style="font-family:'UVF Aphrodite Pro';font-weight:normal;font-size:42px">AaBbCcDdEeFfGgHhŞşIıİi Example</h1> -->
            </div>

            <div class="d-flex justify-content-center" style="font-size: 30px; color: #666666">
                بسم الله الرحمن الرحيم
            </div>
            <div class="d-flex justify-content-center text-center" style="font-family: Courgette; font-size: 18px; color: #666666">
                Dengan memohon rahmat dan ridho Allah SWT, kami mengundang bapak/ibu/saudara/i untuk menghadiri resepsi pernikahan kami:
            </div>
            <br>
            <div class="row">

                <div class="col-lg-6">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('/frontend/template/')}}/img/ring.png" class="img-fluid" alt="" style="float: left;border-radius: 20px; width: 7%;"><span>  AKAD NIKAH</span>
                        <div class="text-body" style="margin-left: 10px;">
                            <h6 style="color: #666666;margin-bottom: 0 !important;font-family: Courgette""><i class="fa fa-calendar"></i>  {{\Carbon\Carbon::parse($form->tgl_akad)->format('l, j F Y') }}</h6>
                            <p style="color: #666666; font-family: Courgette"><i class="fa fa-clock-o"></i>  {{ $form->mulai_akad }} WIB - {{ $form->selesai_akad }} WIB</p>
                            <p style="color: #666666; font-family: Courgette"><i class="fa fa-map-marker"></i>  {{ ucfirst($form->tempat_akad) }} {{ ucfirst($form->alamat_akad) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-2 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('/frontend/template/')}}/img/res.png" class="img-fluid" alt="" style="float: left;border-radius: 15px; width: 7%;"><span>RESEPSI</span>
                        <div class="text-body" style="margin-left: 10px;">
                            <h6 style="color: #666666;margin-bottom: 0 !important;font-family: Courgette""><i class="fa fa-calendar"></i>  {{\Carbon\Carbon::parse($form->tgl_res)->format('l, j F Y') }}</h6>
                            <p style="color: #666666; font-family: Courgette"><i class="fa fa-clock-o"></i>  {{ $form->mulai_res }} WIB - {{ $form->selesai_res }}</p>
                            <p style="color: #666666; font-family: Courgette"><i class="fa fa-map-marker"></i>  {{ $form->tempat_res }} {{ $form->alamat_res }}</p>
                        </div>
                    </div>
                </div>

            </div>
            {{--            <h3 class="d-flex justify-content-center">{{ date('d-m-Y', strtotime($form->tgl_res)) }}</h3><br>--}}
            {{--            <h3 class="d-flex justify-content-center">{{\Carbon\Carbon::parse($form->tgl_res)->format('l, j F Y') }}</h3><br>--}}
            {{--            <div class="d-flex justify-content-center">di {{ $form->tempat_res }} - {{ $form->alamat_res }}--}}
            {{--            </div>--}}
            {{--            <br><br>--}}
        </div>
    </section><!-- End Why Us Section -->

    <div class="container1">
        <h1 id="headline">Menghitung hari:</h1>
        <div id="countdown">
            <ul>
                <li><span id="days"></span>Hari</li>
                <li><span id="hours"></span>Jam</li>
                <li><span id="minutes"></span>Menit</li>
                <li><span id="seconds"></span>Detik</li>
            </ul>
        </div>
        <div id="content" class="emoji">
            <li><span id="days">-</span>Hari</li>
            <li><span id="hours">-</span>Jam</li>
            <li><span id="minutes">-</span>Menit</li>
            <li><span id="seconds">-</span>Detik</li>
        </div>
    </div>

    <section id="events" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="container" data-aos="fade-up">

                <div class="section-title text-center">
                     <h1>Location</h1>
                    <!--<p>Contact Us</p> -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
{{--                    <iframe style="border:0; width: 100%; height: 350px;" src="{{ $form->link_loc }}"></iframe>--}}
{{--                    <div id="maps" style="border:0; width: 100%; height: 350px;">--}}
                        {!! $form->link_loc !!}
{{--                    </div>--}}
                    <div class="form-group text-center mt-2">
                        <a href="https://goo.gl/maps/zVyWrK2t9VrFvTbc8" target="_blank" style="background: #00506a;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 50px; font-size: 17px" class="btn-sm mt-3">Lihat lokasi</a>
                    </div>
{{--                    <a href="https://goo.gl/maps/zVyWrK2t9VrFvTbc8"> link</a>--}}
                </div>
            </div>

        </div>

    </section><!-- End Why Us Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                {{--                <h2>Gallery</h2>--}}
                <h1>Gallery</h1>
            </div>
        </div>

        <div class="container-fluid col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                @foreach($gallery as $gal)
                    {{--                    {{ $gal }}--}}
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="gallery-item">
                            <a href="{{ asset('gallery_img')}}/{{ $gal->foto_gallery }}" class="gallery-lightbox"
                               data-gall="gallery-item">
                                <img src="{{ asset('gallery_img')}}/{{ $gal->foto_gallery }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Gallery Section -->

    {{--    <a class="btn btn-primary btn-sm" id="playPauseBTN" onclick="playPause()">Play &#9658;</a>--}}

    {{--    <!-- ======= Contact Section ======= -->--}}
    {{--    <section id="contact" class="contact">--}}

    {{--        <div class="container" data-aos="fade-up">--}}
    {{--            <div class="form-group mt-3">--}}
    {{--                <h1><strong> Ucapan dan doa</strong></h1>--}}
    {{--            </div>--}}
    {{--            <div class="row mt-1">--}}

    {{--                <div class="col-lg-5 mt-2">--}}
    {{--                    <form action="{{ route('ucapan.store') }}" method="POST" role="form" class="php-email-form btn-submits">--}}
    {{--                        @csrf--}}
    {{--                        <div class="form-group form-textarea">--}}
    {{--                            <input type="hidden" name="nama" class="form-control" id="name" value="{{ $param }}">--}}
    {{--                            <textarea class="form-control formucapan" name="ucapan" rows="5" placeholder="Tulis ucapan untuk kedua mempelai" required></textarea>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mt-3">--}}
    {{--                            <div class="col-sm-5">--}}
    {{--                                <div class="g-recaptcha" data-sitekey="6LedcgEcAAAAAP3g_OK73A4JK-ZnaJKRmtf3lM-i"></div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                            <div class="col-sm-6">--}}
    {{--                                <button type="submit">Kirim Ucapan</button>--}}
    {{--                            </div>--}}

    {{--                        <div class="my-3">--}}
    {{--                            <div class="loading">Loading</div>--}}
    {{--                            <div class="error-message"></div>--}}
    {{--                            <div class="sent-message">Your message has been sent. Thank you!</div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-7 mt-2">--}}
    {{--                    <div class="info" id="ucapan">--}}
    {{--                        <div class="card example-1 scrollbar">--}}
    {{--                            <div class="box" data-aos="zoom-in" data-aos-delay="100">--}}
    {{--                                @foreach($ucapan as $ucp)--}}
    {{--                                    <h5 id="section1"><strong>{{ ucfirst($ucp->nama) }}</strong></h5>--}}
    {{--                                    <p style="color: #171a1d">{{ $ucp->ucapan }}</p><br>--}}
    {{--                                @endforeach--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}


    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section><!-- End Contact Section -->--}}



    <section id="contact" class="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <h1>Ucapan dan Doa</h1>
{{--                    <form id="algin-form" action="" method="POST" role="form" class="php-email-form btn-submits mt-4">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="hidden" name="nama" class="form-control" id="name" value="{{ $param }}">--}}
{{--                            <input type="hidden" name="slug" class="form-control" id="slug" value="{{ $form->slug }}">--}}
{{--                            <label for="message">Message</label> <textarea name="ucapan" id="" msg cols="30" rows="5" class="form-control formucapan" style="background-color: transparent; border: 1px solid #999999" required></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="g-recaptcha mt-2" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>--}}
{{--                        <div class="form-group"> <button type="submit" class="btn btn-primary btn-sm mt-3">Post Comment</button> </div>--}}
{{--                    </form>--}}
                    <div class="section-form">
                        <form method="post" action="#">
                            <div class="intro">
{{--                                <h1>Ucapan</h1>--}}
{{--                                <h2>Get your project started today</h2>--}}
                            </div>
                            <input type="text" value="" placeholder="Name" name="name" tabindex="1"/>
{{--                            <input type="text" value="" placeholder="E-mail" name="email" tabindex="3"/>--}}
{{--                            <input type="text" value="" placeholder="Budget" name="budget" tabindex="2"/>--}}
                            <textarea placeholder="Message" name="Message" tabindex="5" rows="10"></textarea>
                            <input type="button" value="Send Mail" tabindex="6"/>
                        </form>
                    </div>
                </div>

                <section class="testimonial text-center">
                    <div class="container">

{{--                        <div class="heading white-heading">--}}
                            <h1>Comment</h1>
{{--                        </div>--}}
                        <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="testimonial4_slide">
                                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <h4>Client 1</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <h4>Client 2</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <h4>Client 3</h4>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </section>

{{--                <div class="col-sm-7 mb-5 komentar text-center">--}}
{{--                    <h1>Comments</h1>--}}
{{--                    <div class="scrollbar" id="ucapan">--}}
{{--                        @foreach($ucapan as $ucp)--}}
{{--                            @if( $ucp->id % 2 == 0)--}}
{{--                                <div class="comment text-justify mt-3 float-left col-md-12"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">--}}
{{--                                    <h4>{{ ucfirst($ucp->nama) }}</h4> <span>- {{ $ucp->created_at->format('j F Y, g:i a') }}</span> <br>--}}
{{--                                    <p>{{ $ucp->ucapan }}</p>--}}
{{--                                </div>--}}
{{--                            @else--}}
{{--                                <div class="darker text-justify mt-3 float-right col-md-12"> <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">--}}
{{--                                    <h4>{{ ucfirst($ucp->nama) }}</h4> <span>- {{ $ucp->created_at->format('j F Y, g:i a') }}</span> <br>--}}
{{--                                    <p>{{ $ucp->ucapan }}</p>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </section>





    <section id="protocol" class="why-us">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                {{--                <h2>Gallery</h2>--}}
                <h1>Himbauan</h1>
            </div>
        </div>

        <div class="container-fluid col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-12">
                    <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                        <p style="font-size: 25px; font-family: 'Patrick Hand', cursive; color: #cda45e">Dalam rangka mencegah penularan <strong>Covid-19</strong>, dimohon untuk dapat melaksanakan protokol kesehatan. Dengan tetap menggunakan masker, menjaga jarak dan mencuci tangan.</p>
                        <img src="{{ asset('/frontend/template/img/gambar/protokol.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="end" class="end">

{{--        <div class="container" data-aos="fade-up">--}}
{{--            <div class="section-title text-center">--}}
{{--                --}}{{--                <h2>Gallery</h2>--}}
{{--                <h1>Himbauan</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="container-fluid col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-12">
                    <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                        <p style="font-size: 25px">Terima kasih</p>
                        {{ ucfirst($form->nama_panggilan_p) }} & {{ ucfirst($form->nama_panggilan_w) }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="preloader"></div>
    <audio id="audio">
        <source src="{{ asset('/frontend/template') }}/audio/audio.eg" type="audio/mpeg">
    </audio>
    <a class="back-to-top d-flex align-items-center justify-content-center" id="playPauseBTN" onclick="playPause()"><i class="bi bi-music-note"></i></a>

    <br>
    <br>

    <!-- Vendor JS Files -->

</body>
<script src="{{ asset('/frontend/template/')}}/vendor/aos/aos.js"></script>
<script src="{{ asset('/frontend/template/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/frontend/template/')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('/frontend/template/')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
{{--<script src="{{ asset('/template/')}}/vendor/php-email-form/validate.js"></script>--}}
<script src="{{ asset('/frontend/template/')}}/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/frontend/template/')}}/js/main.js?v=1.0.1"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
{{--<script>--}}
{{--    window.onload = function() {--}}
{{--        document.getElementById("audio").play();--}}
{{--    }--}}
{{--</script>--}}
<script>
    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        // let birthday = "Sep 05, 2021 08:00:00",
        let birthday = "{{\Carbon\Carbon::parse($form->tgl_akad)->format('M d, Y') }} {{ $form->mulai_akad }}",
            countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                let now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    let headline = document.getElementById("headline"),
                        countdown = document.getElementById("countdown"),
                        content = document.getElementById("content");

                    headline.innerText = "Menghitung hari:";
                    countdown.style.display = "none";
                    content.style.display = "block";

                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());
</script>

<script>
    var audio           = document.getElementById('audio');
    var playPauseBTN    = document.getElementById('playPauseBTN');
    var count = 0;

    function playPause() {
        if(count == 0){
            count = 1;
            audio.play();
        }else{
            count = 0;
            audio.pause();
        }
    }
</script>

<script>
    $(".btn-submits").submit(function(e){

        e.preventDefault();

        var nama    = $("input[name=nama]").val();
        var slug    = $("input[name=slug]").val();
        var ucapan  = $("textarea[name=ucapan]").val();
        var captchaResponse = grecaptcha.getResponse();

        // console.log(captchaResponse);
        var url = '{{ route('ucapan.store') }}';

        $.ajax({
            url:url,
            method:'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                "nama":nama,
                "ucapan":ucapan,
                "slug":slug,
                "token":captchaResponse
            },
            success:function(response){
                if(response.success){
                    $(".formucapan").val(''); // reset text area
                    grecaptcha.reset(); // reset recaptcha
                    $("#ucapan").load(" #ucapan"); // reload ucapan div

                    alert(response.message) //Message come from controller
                }else{
                    alert(response.message)
                }
            },
            error: function (xhr) {
                console.log(xhr)
            },
        });
    });
</script>

</html>
