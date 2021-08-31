<section id="menu" class="events">
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
</section><!-- End Events Section -->
