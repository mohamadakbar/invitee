<!DOCTYPE html>
<html lang="en">
<head>

    <title>Weinvitee</title>
    <!--

    Eatery Cafe Undangan

    http://www.templatemo.com/tm-515-eatery

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/magnific-popup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/web/css') }}/templatemo-style.css">
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }

        /* Font */
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

        /* Design */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }


        .btn {
            color: #757575;
            padding: 0.8rem;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 100%;
            cursor: pointer;
            border: 1px solid #999999;
            background: transparent;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.12);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            width: 27em;
            border-radius: 0.90rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            width: 100%;
            padding: 2rem;
            /*background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);*/
        }

        .card_title {
            color: #757575;
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            float: left;
            color: #757575;
            font-size: 1.5rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }
        .made_by{
            font-weight: 400;
            font-size: 13px;
            margin-top: 35px;
            text-align: center;
        }
    </style>

</head>
<body>

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand">We<span></span>invitee</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <!--<li><a href="#home" class="smoothScroll">Home</a></li>-->
                <li><a href="#about" class="smoothScroll">Home</a></li>
                <li><a href="#team" class="smoothScroll">Harga</a></li>
                <li><a href="#menu" class="smoothScroll">Template</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#">Call Now! <i class="fa fa-phone"></i> 010 020 0340</a></li> -->
                <a href="/login" class="section-btn">Buat undangan</a>
            </ul>
        </div>

    </div>
</section>


<!-- HOME -->
<!-- <section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="row">

               <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>Eatery Cafe &amp; Restaurant</h3>
                                        <h1>Our mission is to provide an unforgettable experience</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>Your Perfect Breakfast</h3>
                                        <h1>The best dinning quality can be here too!</h1>
                                        <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>New Restaurant in Town</h3>
                                        <h1>Enjoy our special menus every Sunday and Friday</h1>
                                        <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

     </div>
</section> -->


<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="about-info">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                        <h4>Read our story</h4>
                        <h2>Undangan Pernikahan di Weinvitee</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <p>Sudah beberapa tahun ini kita fokus pada undangan online, melihat dari segi informasi yang sekarang makin pesat, kita hadir untuk memudahkan kamu mengundang teman teman kamu lewat weinvitee.my.id,</p>
                        <p> dan yang ngga kalah penting, undangan pernikahan yang kita sediakan disini bisa menghemat budget kamu juga lhoo ...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                    <img src="{{ asset('frontend/web/img') }}/flatweding.jpg" class="img-responsive" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<section id="team" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            {{--            <div class="col-md-12 col-sm-12">--}}
            {{--                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">--}}
            {{--                    <h2>Harga Undangan</h2>--}}
            {{--                    <!-- <h4>They are nice &amp; friendly</h4> -->--}}
            {{--                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat provident tempore nemo dignissimos tempora, cumque ipsam animi saepe qui.</h4>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div>
                <h2>Harga Undangan</h2>
                <!--<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat provident tempore nemo dignissimos tempora, cumque ipsam animi saepe qui.</h4>-->
                <ul class="cards">

                    <li class="cards_item">
                        <div class="card">
                            {{--                            <div class="card_image"></div>--}}
                            <div class="card_content">
                                <h1 class="card_title">Free</h1>
                                <h3>-</h3>
                                {{--                                <span class="badge badge-success">Paling diminati</span><br><br>--}}
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Background music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Utama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Couple &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                {{--                                    <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Event &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                {{--                                    <p class="card_text"> <i class="fa fa-check-circle"></i> Google maps &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                {{--                                <p class="card_text"> <i class="fa fa-check-circle"></i> Gallery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                {{--                                <p class="card_text"> <i class="fa fa-check-circle"></i> Hitung Mundur Waktu Acara &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                {{--                                <p class="card_text"> <i class="fa fa-check-circle"></i> Ucapan dan doa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Masa Aktif 1 Minggu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <button class="btn card_btn"><a href="{{ route('register') }}">Daftar Sekarang</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="cards_item">
                        <div class="card" style="background-image: linear-gradient(to right, white , #00e2a1)">
                            {{--                            <div class="card_image"></div>--}}
                            <div class="card_content">
                                <h1 class="card_title">Rp. 55.000</h1>
                                <h3>Entry</h3>
                                {{--                                <span class="badge badge-success">Paling diminati</span><br><br>--}}
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Background music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Utama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Couple &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Event &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Google maps &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                {{--                                <p class="card_text"> <i class="fa fa-check-circle"></i> Gallery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                {{--                                <p class="card_text"> <i class="fa fa-check-circle"></i> Hitung Mundur Waktu Acara &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                {{--                                <p class="card_text"> <i class="fa fa-check-circle"></i> Ucapan dan doa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>--}}
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Masa Aktif 1 Bulan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <button class="btn card_btn"><a href="https://api.whatsapp.com/send?phone=6289680090856&text=Hallo%20,%20Saya%20mau%20tanya%20tentang%20undangan%20online%20di%20weinvitee.my.id." target="_blank">Contact Admin</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="cards_item">
                        <div class="card" style="background-image: linear-gradient(to right, white , #00bae2)">
                            {{--                            <div class="card_image"></div>--}}
                            <div class="card_content">
                                <h1 class="card_title">Rp. 80.000</h1>
                                <h3>Pro</h3>
                                <span class="badge badge-success">Paling diminati</span><br><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Background music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Utama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Couple &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Halaman Event &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Google maps &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Gallery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Hitung Mundur Waktu Acara &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Ucapan dan doa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <p class="card_text"> <i class="fa fa-check-circle"></i> Masa Aktif 6 Bulan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                                <button class="btn card_btn"><a href="https://api.whatsapp.com/send?phone=6289680090856&text=Hallo%20,%20Saya%20mau%20tanya%20tentang%20undangan%20online%20di%20weinvitee.my.id." target="_blank">Contact Admin</a></button>
                            </div>
                        </div>
                    </li>

                    {{--                    <li class="cards_item">--}}
                    {{--                        <div class="card">--}}
                    {{--                            --}}{{--                            <div class="card_image"></div>--}}
                    {{--                            <div class="card_content">--}}
                    {{--                                <h1 class="card_title">Card Grid Layout</h1>--}}
                    {{--                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>--}}
                    {{--                                <button class="btn card_btn">Read More</button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                    {{--                    <li class="cards_item">--}}
                    {{--                        <div class="card">--}}
                    {{--                            --}}{{--                            <div class="card_image"></div>--}}
                    {{--                            <div class="card_content">--}}
                    {{--                                <h1 class="card_title">Card Grid Layout</h1>--}}
                    {{--                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>--}}
                    {{--                                <button class="btn card_btn">Read More</button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}
                    {{--                    --}}
                    {{--                    <li class="cards_item">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>--}}
                    {{--                            <div class="card_content">--}}
                    {{--                                <h2 class="card_title">Card Grid Layout</h2>--}}
                    {{--                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>--}}
                    {{--                                <button class="btn card_btn">Read More</button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="cards_item">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>--}}
                    {{--                            <div class="card_content">--}}
                    {{--                                <h2 class="card_title">Card Grid Layout</h2>--}}
                    {{--                                <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>--}}
                    {{--                                <button class="btn card_btn">Read More</button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

                </ul>
            </div>

            {{--            <h3 class="made_by">Made with ♡</h3>--}}
        </div>
    </div>
</section>

<!-- PAKET -->
<section id="menu" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Template Undangan kami</h2>
                    <!-- <h4>They are nice &amp; friendly</h4> -->
                    <h4>Berikut ini contoh undangan yang kita punya, di cek dulu yaa, siapa tau suka ..</h4>
                </div>
            </div>

            <div class="col-md-6 col-sm-8">
                <div class="footer-info text-center" style="background-color: #2B81AF; border-radius: 10px">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="color: white"><a href="{{ route('template1') }}" target="_blank"> Template 1</a></h2>
                </div>
            </div>

            <div class="col-md-6 col-sm-8">
                <div class="footer-info text-center" style="background-color: #2B81AF; border-radius: 10px">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="color: white"><a href="{{ route('template2') }}" target="_blank"> Template 2</a></h2>
                </div>
            </div>

            {{--            <div class="col-md-6 col-sm-8">--}}
            {{--                <div class="footer-info footer-open-hour">--}}
            {{--                    <div class="section-title">--}}
            {{--                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>--}}
            {{--                    </div>--}}
            {{--                    <div class="wow fadeInUp" data-wow-delay="0.4s">--}}
            {{--                        <p>Monday: Closed</p>--}}
            {{--                        <div>--}}
            {{--                            <strong>Tuesday to Friday</strong>--}}
            {{--                            <p>7:00 AM - 9:00 PM</p>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <strong>Saturday - Sunday</strong>--}}
            {{--                            <p>11:00 AM - 10:00 PM</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</section>


<!-- TESTIMONIAL -->
<section id="testimonial" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Testimonials</h2>
                </div>
            </div>

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum ullamcorper nulla non.</p>
                        <div class="tst-author">
                            <h4>Digital Carlson</h4>
                            <span>Pharetra quam sit amet</span>
                        </div>
                    </div>

                    <div class="item">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vestibulum orci quam.</p>
                        <div class="tst-author">
                            <h4>Johnny Stephen</h4>
                            <span>Magna nisi porta ligula</span>
                        </div>
                    </div>

                    <div class="item">
                        <p>Vivamus aliquet felis eu diam ultricies congue. Morbi porta lorem nec consectetur porta quis dui elit habitant morbi.</p>
                        <div class="tst-author">
                            <h4>Jessie White</h4>
                            <span>Vitae lacinia augue urna quis</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- How to change your own map point
                    1. Go to Google Maps
                    2. Click on your location point
                    3. Click "Share" and choose "Embed map" tab
                    4. Copy only URL and paste it within the src="" field below
            -->
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                <div id="google-map">
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.9028317217727!2d106.69894396882168!3d-6.228022401961628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa226e02b2d3%3A0x8570bf85af99ea45!2sJl.%20Griya%20Kencana%201%20No.1B%2C%20RT.002%2FRW.001%2C%20Sudimara%20Sel.%2C%20Kec.%20Ciledug%2C%20Kota%20Tangerang%2C%20Banten%2015151!5e0!3m2!1sid!2sid!4v1631042242923!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Contact Us</h2>
                    </div>
                </div>

                <!-- CONTACT FORM -->
                <form action="" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                    <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                    <h6 class="text-success">Your message has been sent successfully.</h6>

                    <!-- IF MAIL NOT SENT -->
                    <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                        <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<a href="https://api.whatsapp.com/send?phone=6289680090856&text=Hallo%20,%20Saya%20mau%20tanya%20tentang%20undangan%20online%20di%20weinvitee.my.id." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-8">
                <div class="footer-info">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                    </div>
                    <address class="wow fadeInUp" data-wow-delay="0.4s">
                        <p>Jl. Kp Dukuh RT01/02 No 5, Cieldug, Kota Tangerang</p>
                    </address>
                </div>
            </div>

            <div class="col-md-3 col-sm-8">
                <div class="footer-info">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Contact</h2>
                    </div>
                    <address class="wow fadeInUp" data-wow-delay="0.4s">
                        <p>089680090856</p>
                        <p><a href="mailto:info@company.com">info@weinvitee.my.id</a></p>
                        <!--<p>Telegram :  </p>-->
                    </address>
                </div>
            </div>

            <div class="col-md-2 col-sm-4">
                <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                    <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-google"></a></li>
                </ul>

                <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                    <p><br>Copyright &copy; 2021 <br>Weinvitee

                        <br><br>Design: <a rel="nofollow" href="http://templatemo.com" target="_parent">TemplateMo</a></p>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="{{ asset('frontend/web/js/') }}/jquery.js"></script>
<script src="{{ asset('frontend/web/js/') }}/bootstrap.min.js"></script>
<script src="{{ asset('frontend/web/js/') }}/jquery.stellar.min.js"></script>
<script src="{{ asset('frontend/web/js/') }}/wow.min.js"></script>
<script src="{{ asset('frontend/web/js/') }}/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/web/js/') }}/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend/web/js/') }}/smoothscroll.js"></script>
<script src="{{ asset('frontend/web/js/') }}/custom.js"></script>

</body>
</html>
