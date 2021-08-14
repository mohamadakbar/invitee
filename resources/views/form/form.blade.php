<div class="row">
    <div class="col-md-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Foto Sampul <small></small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="margin-top:1px">
                <br />
                <input type="file" id="image-source" name="foto_sampul" onchange="previewImage();"/>
            </div>
            <div class="x_content" style="margin-top:auto">
                <img id="image-preview" src="@if(isset($form)){{ url('upload_img/'.$form->foto_sampul) }}@endif" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="x_panel">
            <div class="x_title">
                <h2>Foto Gallery <small></small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
                <input type="file" id="file-input" onchange="loadPreview(this)" name="foto_gallery[]"   multiple/>
                <span class="text-danger">{{ $errors->first('image') }}</span>
                <div id="thumb-output"></div>
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
                <h2>Pengaturan <small></small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="margin-top:1px">
                <br />
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="status_und">Status Undangan</label>
                        <select name="status_und" id="" class="form-control" required>
                            <option value="">Pilih..</option>

                            <option value="publik" @if(isset($form)) @if($form->status_und == 'publik') {{'selected'}} @endif  @endif>Publik</option>
                            <option value="private" @if(isset($form)) @if($form->status_und == 'private') {{'selected'}} @endif @endif>Private</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="status_und">Design Undangan</label>
                        <select name="template_id" id="template_id" class="form-control" required>
                            <option value="">Pilih..</option>
                            @foreach($tmp as $temp)
                                <option value="{{ $temp->id }}" @if(isset($form)) @if($temp->id == $form->template_id){{ 'selected' }} @endif @endif >{{ $temp->nama_template }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="form-group row">
                            <label>Link Google Maps</label>
                            <input type="text" class="form-control" name="link_loc" @if(isset($form)) value="{{ $form->link_loc }}" @endif>
                        </div>
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-3">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Mempelai Pria<small></small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="col-md-12">
                    <div class="form-group row" style="margin-top:auto">
                        <img id="image-preview-pria" src="@if(isset($form)){{ url('upload_img/'.$form->foto_p) }}@endif" class="img-fluid">
                    </div>
                    <div class="form-group row">
                        <label>Foto Pria </label>
                        <input type="file" class="form-group ml-2" id="image-source-pria" name="foto_p" onchange="previewImagePria();"/>
                    </div>
                    <div class="form-group row">
                        <label>Nama Panggilan</label>
                        <input type="hidden" class="form-control" name="id_user" value="{{ Auth::user()->id }}">
                        <input type="text" class="form-control @error('nama_panggilan_p')is-invalid @enderror" name="nama_panggilan_p" @if(isset($form)) value="{{ $form->nama_panggilan_p }}" @else value="{{ old('nama_panggilan_p') }}" @endif>
                        @error('nama_panggilan_p')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap_p')is-invalid @enderror" name="nama_lengkap_p" @if(isset($form)) value="{{ $form->nama_lengkap_p }}" @else value="{{ old('nama_lengkap_p') }}" @endif>
                        @error('nama_lengkap_p')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control @error('nama_ortu_p_p')is-invalid @enderror" name="nama_ortu_p_p" @if(isset($form)) value="{{ $form->nama_ortu_p_p }}" @else value="{{ old('nama_ortu_p_p') }}" @endif>
                        @error('nama_ortu_p_p')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control @error('nama_ortu_p_w')is-invalid @enderror" name="nama_ortu_p_w" @if(isset($form)) value="{{ $form->nama_ortu_p_w }}" @else value="{{ old('nama_ortu_p_w') }}" @endif>
                        @error('nama_ortu_p_w')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Tentang</label>
                        <textarea class="resizable_textarea form-control @error('tentang_p')is-invalid @enderror" name="tentang_p"> @if(isset($form)){{ $form->tentang_p }} @else {{ old('tentang_p') }} @endif</textarea>
                        @error('tentang_p')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Mempelai Wanita<small></small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                <div class="col-md-12">

                    <div class="form-group row" style="margin-top:auto">
                        <img id="image-preview-wanita" src=" @if(isset($form)){{ url('upload_img/'.$form->foto_w) }} @endif" class="img-fluid">
                    </div>
                    <div class="form-group row">
                        <label>Foto Wanita </label>
                        <input type="file" class="form-group ml-2 @error('foto_w')is-invalid @enderror" id="image-source-wanita" name="foto_w" onchange="previewImageWanita();"/>
                        @error('foto_w')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Panggilan</label>
                        <input type="text" class="form-control @error('nama_panggilan_w')is-invalid @enderror" name="nama_panggilan_w" @if(isset($form)) value="{{ $form->nama_panggilan_w }}" @else value="{{ old('nama_panggilan_w') }}" @endif>
                        @error('nama_panggilan_w')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap_w')is-invalid @enderror" name="nama_lengkap_w" @if(isset($form)) value="{{ $form->nama_lengkap_w }}" @else value="{{ old('nama_lengkap_w') }}" @endif>
                        @error('nama_lengkap_w')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control @error('nama_ortu_w_p')is-invalid @enderror" name="nama_ortu_w_p" @if(isset($form)) value="{{ $form->nama_ortu_w_p }}" @else value="{{ old('nama_ortu_w_p') }}" @endif>
                        @error('nama_ortu_w_p')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control @error('nama_ortu_w_w')is-invalid @enderror" name="nama_ortu_w_w" @if(isset($form)) value="{{ $form->nama_ortu_w_w }}" @else value="{{ old('nama_ortu_w_w') }}" @endif>
                        @error('nama_ortu_w_w')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label>Tentang</label>
                        <textarea class="resizable_textarea form-control @error('tentang_w')is-invalid @enderror" name="tentang_w"> @if(isset($form)){{ $form->tentang_w }} @else{{ old('tentang_w') }} @endif</textarea>
                        @error('tentang_w')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<div class="row">

    <div class="col-md-3 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Akad <small>different form elements</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                <div class="col-md-12"><label>Tanggal Akad</label></div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <input type="text" class="form-control has-feedback-left @error('tgl_akad')is-invalid @enderror" id="single_cal3" name="tgl_akad" @if(isset($form)) value="{{ $form->tgl_akad }}" @else value="{{ old('tgl_akad') }}" @endif>
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        @error('tgl_akad')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-sm-12  form-group">
                    <label>Mulai</label>
                    <select id="waktu_akad"  name="mulai_akad" class="form-control @error('mulai_akad')is-invalid @enderror">
                        @for($i=1;$i<=23;$i++)
                            @php
                                $i = '0'.$i.'.00';
                            @endphp
                            <option  @if(isset($form)) value="{{ $i }}" @endif  @if(isset($form)) @if($i == $form->mulai_akad) {{ 'selected' }}@endif @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('mulai_akad')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12  form-group">
                    <label>Selesai</label>
                    <select id="waktu_akad"  name="selesai_akad" class="form-control @error('selesai_akad')is-invalid @enderror">
                        @for($i=1;$i<=23;$i++)
                            @php
                                $i = '0'.$i.'.00';
                            @endphp
                            <option  @if(isset($form))value="{{ $i }}" @endif @if(isset($form)) @if($i == $form->selesai_akad) {{ 'selected' }}@endif @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('selesai_akad')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Tempat Akad</label>
                        <input type="text" class="form-control @error('tempat_akad')is-invalid @enderror" name="tempat_akad" @if(isset($form)) value="{{ $form->tempat_akad }}" @else value="{{ old('tempat_akad') }}" @endif>
                        @error('tempat_akad')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Alamat</label>
                        <textarea class="resizable_textarea form-control @error('alamat_akad')is-invalid @enderror" name="alamat_akad"> @if(isset($form)){{ $form->alamat_akad }} @else {{ old('alamat_akad') }} @endif</textarea>
                        @error('alamat_akad')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Resepsi <small>different form elements</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                <div class="col-md-12"><label>Tanggal Resepsi</label></div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <input type="text" class="form-control has-feedback-left @error('tgl_res')is-invalid @enderror" id="single_cal4" placeholder="" aria-describedby="inputSuccess2Status4" name="tgl_res" @if(isset($form)) value="{{ $form->tgl_res }}" @else value="{{ old('tgl_res') }}" @endif>
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        @error('tgl_res')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-sm-12  form-group">
                    <label>Mulai</label>
                    <select id="mulai_res"  name="mulai_res" class="form-control @error('mulai_res')is-invalid @enderror">
                        @for($i=1;$i<=23;$i++)
                            @php
                                $i = '0'.$i.'.00';
                            @endphp
                            <option @if(isset($form)) value="{{ $i }}" @endif @if(isset($form)) @if($i == $form->mulai_res) {{ 'selected' }}@endif @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('mulai_res')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12  form-group">
                    <label>Selesai</label>
                    <select id="selesai_res"  name="selesai_res" class="form-control @error('selesai_res')is-invalid @enderror" >
                        @for($i=1;$i<=23;$i++)
                            @php
                                $i = '0'.$i.'.00';
                            @endphp
                            <option @if(isset($form)) value="{{ $i }}" @endif @if(isset($form)) @if($i == $form->selesai_res) {{ 'selected' }}@endif @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    @error('selesai_res')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Tempat Resepsi</label>
                        <input type="text" class="form-control @error('tempat_res')is-invalid @enderror" name="tempat_res" @if(isset($form)) value="{{ $form->tempat_res }}" @else value="{{ old('alamat_res') }}" @endif>
                        @error('tempat_res')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Alamat</label>
                        <textarea class="resizable_textarea form-control @error('alamat_res')is-invalid @enderror" name="alamat_res"> @if(isset($form)){{ $form->alamat_res }} @else {{ old('alamat_res') }} @endif</textarea>
                        @error('alamat_res')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>



{{--<script>--}}
{{--    function previewImage() {--}}
{{--        document.getElementById("image-preview").style.display = "block";--}}
{{--        var oFReader = new FileReader();--}}
{{--        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);--}}

{{--        oFReader.onload = function(oFREvent) {--}}
{{--            document.getElementById("image-preview").src = oFREvent.target.result;--}}
{{--        };--}}
{{--    };--}}
{{--</script>--}}


<script>

    function loadPreview(input){
        var data = $(input)[0].files; //this file data
        $.each(data, function(index, file){
            if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                var fRead = new FileReader();
                fRead.onload = (function(file){
                    return function(e) {
                        var img = $('<img style="width: 40%;" />').addClass('thumb').attr('src', e.target.result); //create image thumb element
                        $('#thumb-output').append(img);
                    };
                })(file);
                fRead.readAsDataURL(file);
            }
        });
    }

    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };

    function previewImagePria() {
        document.getElementById("image-preview-pria").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-pria").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-pria").src = oFREvent.target.result;
        };
    }

    function previewImageWanita() {
        document.getElementById("image-preview-wanita").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-wanita").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-wanita").src = oFREvent.target.result;
        };
    }

    function previewImageGallery1() {
        document.getElementById("image-preview-gallery-1").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-gallery-1").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-gallery-1").src = oFREvent.target.result;
        };
    }

    function previewImageGallery2() {
        document.getElementById("image-preview-gallery-2").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-gallery-2").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-gallery-2").src = oFREvent.target.result;
        };
    }

    function previewImageGallery3() {
        document.getElementById("image-preview-gallery-3").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-gallery-3").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-gallery-3").src = oFREvent.target.result;
        };
    }

    function previewImageGallery4() {
        document.getElementById("image-preview-gallery-4").style.display = 'block';
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-gallery-4").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-gallery-4").src = oFREvent.target.result;
        };
    }

    function previewImageGallery5() {
        document.getElementById("image-preview-gallery-5").style.display = 'block';
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-gallery-5").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-gallery-5").src = oFREvent.target.result;
        };
    }

    function previewImageGallery6() {
        document.getElementById("image-preview-gallery-6").style.display = 'block';
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source-gallery-6").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview-gallery-6").src = oFREvent.target.result;
        };
    }


</script>

