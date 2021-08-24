@extends('layouts.admin')

@section('content')
    <div class="col-md-6 col-sm-6 ">
        @if ($message = Session::get('message'))
            <div class="alert alert-success" id="floating_alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2><small>Daftar Paket</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Paket</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($paket as $no => $pkt)
                                    <tr>
                                        <td width="10">{{ $no+1 }}</td>
                                        <td>{{ $pkt->nama_paket }}</td>
                                        <td width="250">
                                            <a href="/paket/{{ $pkt->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                                            <a href="/delete/{{ $pkt->slug }}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
