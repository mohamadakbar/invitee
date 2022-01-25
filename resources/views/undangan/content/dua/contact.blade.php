<section id="contact" class="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1>Ucapan dan Doa</h1>
                <div class="section-form">
                    <form method="post" action="" class="btn-submits">
                        <div class="intro">
                        </div>
                        <input type="text" name="nama" disabled class="form-control" id="name" value="{{ $param }}">
                        <input type="hidden" name="slug" class="form-control" id="slug" value="{{ $form->slug }}">
                        <textarea placeholder="Message" name="ucapan" class="ucapan_textarea" tabindex="5" rows="10"></textarea>
                        <center><div class="g-recaptcha mt-2" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div></center>
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Post Comment</button>
                    </form>
                </div>
            </div>

            <section class="testimonial text-center">
                <div class="container">
                    <h1>Comment</h1>
                    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                        <div class="carousel-inner" role="listbox" id="ucapan">
                            @foreach($ucapan as $key => $ucp)
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <div class="testimonial4_slide">
                                    <h2>{{ $ucp->nama }}</h2> <h6 style="font-family: Calibri">{{\Carbon\Carbon::parse($ucp->created_at)->format('j F Y, g:i a') }}</h6>
                                    <h2>{{ $ucp->ucapan }}</h2>
                                </div>
                            </div>
                            @endforeach
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
        </div>
    </div>
</section>

<section id="protocol" class="why-us">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            {{--                <h2>Gallery</h2>--}}
            <h1>Berikan hadiah</h1><br>
            <p style="font-size: 20px; font-family: 'Patrick Hand', cursive; color: #cda45e; line-height: 30px"><h5>Tanpa mengurangi rasa hormat, untuk melengkapi kebahagiaan pengantin, Anda dapat memberikan tanda kasih dengan transfer ke rekening.</h5></p>
        </div>
    </div>
    <div class="container-fluid col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-12">
                <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                    <p style="font-size: 25px; font-family: 'Patrick Hand', cursive; color: #cda45e">BCA</p>
                    <p>No. Rekening : <div id="rek1">7655092064</div> </p>
                    <p>a.n : Diana Nopitasari </p>
                    {{--                            <button onclick="copyTextFromElement('rek')">Copy Rekening</button>--}}
                    <button type="button" class="btn btn-md btn-rounded btn-cls" onclick="copyTextFromElement('rek1')" style="background: #00506a;color: white">Copy Rekening</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-12">
                <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                    <p style="font-size: 25px; font-family: 'Patrick Hand', cursive; color: #cda45e">BNI</p>
                    <p>No. Rekening : <div id="rek2">1101935262</div> </p>
                    <p>a.n : Arafi Syahrir</p>
                    <button type="button" class="btn btn-md btn-rounded btn-cls" onclick="copyTextFromElement('rek2')" style="background: #00506a;color: white">Copy Rekening</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="protocol" class="why-us">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <h1>Himbauan</h1>
        </div>
    </div>
    <div class="container-fluid col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-12">
                <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                    <p style="font-size: 25px; font-family: 'Patrick Hand', cursive;"><h5>Dalam rangka mencegah penularan <strong>Covid-19</strong>, dimohon untuk dapat melaksanakan protokol kesehatan. Dengan tetap menggunakan masker, menjaga jarak dan mencuci tangan.</h5></p>
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
    <source src="{{ asset('/upload_img/audio/') }}/{{ $form->music }}" type="audio/mpeg">
</audio>
<a class="back-to-top d-flex align-items-center justify-content-center" id="playPauseBTN" onclick="playPause()"><i class="bi bi-music-note"></i></a>
