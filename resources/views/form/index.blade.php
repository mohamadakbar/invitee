@extends('layouts.admin')

@section('content')

    @if($message = Session::get('error'))
        <div class="alert alert-danger" id="floating_alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="floating_alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

<div class="row">
    <div class="clearfix"></div>
    @if($form->is_create == 0)
        <div class="col-md-6 col-sm- ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><small>Undangan saya</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="bs-example" data-example-id="simple-jumbotron">
                        <div class="x_content" style="margin-top:auto">

                            <div class="col-md-12">
                                Kamu belum buat undangan nih, bikin dulu yok <a href="{{ route('form.create') }}">disini</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">

            <div class="col-md-6 col-sm- ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Undangan saya</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="x_content" style="margin-top:auto">

                                <div class="col-md-12">
                                    <img src="{{ asset('upload_img/'.$form->foto_sampul) }}" class="img-fluid">
                                </div>

                                <div class="col-md-12" style="margin-top: 1%">
                                    <h4><span class="badge badge-success">Staatus : {{ ucfirst($form->status_und) }}</span></h4>
                                </div>

                                <div class="col-md-12">
                                    <h1>{{ $form->nama_panggilan_p }} & {{ $form->nama_panggilan_w }}</h1>
                                    <h2>{{ $form->tgl_res }}</h2>
                                </div>

                                <div class="col-md-12" style="margin-top: 3%">
                                    <p class="font-gray-dark">
                                        <b>{{ $form->nama_lengkap_p }}</b><br>
                                        {{ $form->tentang_p }}<br>
                                    </p>
                                </div>

                                <div class="col-md-12">
                                    <p class="font-gray-dark">
                                        <b>{{ $form->nama_lengkap_w }}</b><br>
                                        {{ $form->tentang_w }}<br>
                                    </p>
                                </div>

                                <div class="col-md-12">
                                    <p class="font-gray-dark">
                                        <b>Nama Template</b><br>
                                        <b style="color: #0a53be">{{ $tmp->nama_template }}</b>
                                    </p>
                                </div>

                                <div class="col-md-12">
                                    <p class="font-gray-dark">
                                        <b>Dibuat</b><br>
                                        {{ $tmp->created_at }}
                                    </p>
                                </div>

                                <div class="col-md-12">
                                    <p class="font-gray-dark">
                                        <b>Di ubah</b><br>
                                        @if($tmp->updated_at == '')-@else{{ $tmp->updated_at }}@endif
                                    </p>
                                </div>

                                <div class="col-md-12 right">
                                    <a href="{{ route('undangan', $form->nama_panggilan_p.'&'.$form->nama_panggilan_w) }}" class="btn btn-primary btn-sm" target="_blank">Preview</a>
                                    <a href="{{ url('edit').'/'.Auth::user()->id }}" class="btn btn-success btn-sm">Ubah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif

</div>

<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
</script>


@endsection
