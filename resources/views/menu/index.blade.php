@extends('layouts.admin')

@section('content')

    <div class="col-md-9 col-sm-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><small>Daftar Menu</small></h2>
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
                                    <th>Nama Menu</th>
                                    <th>Nama Template</th>
                                    <th>Icon</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($menu as $no => $menus)
                                    <tr>
                                        <td width="10">{{ $no+1 }}</td>
                                        <td>{{ $menus->nama_menu }}</td>
                                        <td>{{ $menus->nama_template }}</td>
                                        <td>{{ $menus->icon }}</td>
                                        <td>{{ $menus->slug }}</td>
                                        <td width="150">
                                            <a href="/users/{{ $menus->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                                            <a href="/delete/{{ $menus->slug }}" class="btn btn-sm btn-danger">Delete</a>
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
