@extends('layouts.admin')

@section('content')

    @if($message = Session::get('error'))
        <div class="alert alert-danger" id="floating_alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" id="floating_alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2><small>Daftar User</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
{{--                            <p class="text-muted font-13 m-b-30">--}}
{{--                                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.--}}
{{--                            </p>--}}
                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Dibuat</th>
                                        <th>Diubah</th>
                                        <th>Paket</th>
                                        <th>Role</th>
                                        <th>Template ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($users as $user)
                                        @if( $user->roles !=1 )
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->updated_at }}</td>
                                                <td>{{ $user->paket->nama_paket }}</td>
                                                <td>{{ $user->role->name }}</td>
                                                <td>{{ $user->template['nama_template'] }}</td>
                                                <td>
                                                    <form action="{{ route('users.destroy', ['email' => $user->email]) }}" method="post">
                                                    <a href="/users/{{ $user->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                                                    <a href="/form/user/{{ $user->id }}" class="btn btn-sm btn-primary">Lihat</a>
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
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
