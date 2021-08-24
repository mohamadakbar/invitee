<section id="contact" class="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-5 text-center">
                <h1>Ucapan dan Doa</h1>
                <form id="algin-form" action="" method="POST" role="form" class="php-email-form btn-submits mt-4">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="nama" class="form-control" id="name" value="{{ $param }}">
                        <input type="hidden" name="slug" class="form-control" id="slug" value="{{ $form->slug }}">
                        <label for="message">Message</label> <textarea name="ucapan" id="" msg cols="30" rows="5" class="form-control formucapan" style="background-color: transparent; border: 1px solid #999999" required></textarea>
                    </div>
                    <div class="g-recaptcha mt-2" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                    <div class="form-group"> <button type="submit" class="btn btn-primary btn-sm mt-3">Post Comment</button> </div>
                </form>
            </div>

            <div class="col-sm-7 mb-5 komentar text-center">
                <h1>Comments</h1>
                <div class="scrollbar" id="ucapan">
                    @foreach($ucapan as $ucp)
                        @if( $ucp->id % 2 == 0)
                            <div class="comment text-justify mt-3 float-left col-md-12"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                                <h4>{{ ucfirst($ucp->nama) }}</h4> <span>- {{ $ucp->created_at->format('j F Y, g:i a') }}</span> <br>
                                <p>{{ $ucp->ucapan }}</p>
                            </div>
                        @else
                            <div class="darker text-justify mt-3 float-right col-md-12"> <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                                <h4>{{ ucfirst($ucp->nama) }}</h4> <span>- {{ $ucp->created_at->format('j F Y, g:i a') }}</span> <br>
                                <p>{{ $ucp->ucapan }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
