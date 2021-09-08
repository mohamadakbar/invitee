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
                        <p style="color: #666666; font-family: Courgette"><i class="fa fa-clock-o"></i>  {{ $form->mulai_res }} WIB - {{ $form->selesai_res }} WIB</p>
                        <p style="color: #666666; font-family: Courgette"><i class="fa fa-map-marker"></i>  {{ $form->tempat_res }} {{ $form->alamat_res }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Why Us Section -->
