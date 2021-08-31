<section id="contact" class="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1>Ucapan dan Doa</h1>
                <div class="section-form">
                    <form method="post" action="" class="btn-submits">
                        <div class="intro">
                        </div>
{{--                        <input type="text" value="{{ $form->slug }}" placeholder="Name" name="name" tabindex="1"/>--}}
                        <input type="text" name="nama" disabled class="form-control" id="name" value="{{ $param }}">
                        <input type="hidden" name="slug" class="form-control" id="slug" value="{{ $form->slug }}">
                        <textarea placeholder="Message" name="ucapan" tabindex="5" rows="10"></textarea>
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
