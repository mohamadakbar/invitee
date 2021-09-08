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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Undangan Main CSS File -->
    <link href="{{ asset('/frontend/template/')}}/css/style2.css?v=1.0.1" rel="stylesheet">
    <style>
        .modal-content {
            background-size: 50%;
            height: 400px;
            background-image: url({{ asset('/frontend/template/img/border-corner2.png') }}), url({{ asset('/frontend/template/img/border-corner-bottom.png') }});
            background-position: top right, bottom left;
            background-repeat: no-repeat, no-repeat;
            background-size: 20%, 20%;
        }

        .carousel-control-prev-icon {
            background-color: red;
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
    * Undangan Name: Restaurantly - v3.3.0
    * Undangan URL: https://bootstrapmade.com/restaurantly-restaurant-template/
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
                @if($menus->slug != 'count')
                    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
                        <div class="mobile-bottom-nav__item-content">
                            <a href="#{{ $menus->slug }}" onClick="removehash()">{!! $menus->icon !!}<br>{{ $menus->nama_menu }}</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </nav>

    </div>
</header><!-- End Header -->

<main id="main">
    @foreach($menu as $pages)
        @include('undangan.content.dua.'.$pages->slug)
    @endforeach

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
</main>
</body>
<script src="{{ asset('/frontend/template/')}}/vendor/aos/aos.js"></script>
<script src="{{ asset('/frontend/template/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/frontend/template/')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('/frontend/template/')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
{{--<script src="{{ asset('/template/')}}/vendor/php-email-form/validate.js"></script>--}}
<script src="{{ asset('/frontend/template/')}}/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Undangan Main JS File -->
<script src="{{ asset('/frontend/template/')}}/js/main.js?v=1.0.1"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
{{--<script>--}}
{{--    window.onload = function() {--}}
{{--        document.getElementById("audio").play();--}}
{{--    }--}}
{{--</script>--}}
<script>
    function removehash(){
        setTimeout(function(){
            history.replaceState("", document.title, window.location.pathname);
        }, 1);
    }
</script>
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
                    $(".ucapan_textarea").val(''); // reset text area
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
