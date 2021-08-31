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
