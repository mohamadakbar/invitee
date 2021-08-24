@extends('layouts.admin')

@section('content')

    <div class="col-md-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>List Menu <small></small></h2>
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
                <form action="{{ route('paket.update') }}" method="post" class="form-horizontal form-label-left">
                    @csrf
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios--}}
{{--                            <br>--}}
{{--                            <small class="text-navy">Normal Bootstrap elements</small>--}}
{{--                        </label>--}}

{{--                        <div class="col-md-9 col-sm-9 ">--}}
{{--                            <div class="checkbox">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox" value=""> Option one. select more than one options--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox" value=""> Option two. select more than one options--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="radio">--}}
{{--                                <label>--}}
{{--                                    <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="radio">--}}
{{--                                <label>--}}
{{--                                    <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-3  control-label">Menu pada paket {{ \Illuminate\Support\Facades\Request::segment(2) }}
                            <br>
{{--                            <small class="text-navy">Normal Bootstrap elements</small>--}}
                        </label>

                        <input type="hidden" name="paket_id" value="{{ $menu->aksesmenu[0]->paket_id }}">
                        <div class="col-md-9 col-sm-9 ">
                            @foreach($menus as $menus)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="flat" name="menu_id[]"
                                           @foreach($menu->aksesmenu as $akses)
                                                @if($menus->id == $akses->menu_id) checked @endif
                                            @endforeach
                                           value="{{ $menus->id }}"> {{ $menus->nama_menu }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    </div>
{{--                    <div class="form-group row">--}}
{{--                        <label class="control-label col-md-3 col-sm-3 ">Switch</label>--}}
{{--                        <div class="col-md-9 col-sm-9 ">--}}
{{--                            <div class="">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox" class="js-switch" checked /> Checked--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox" class="js-switch" /> Unchecked--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="">--}}
{{--                                <label>--}}
{{--                                    <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
