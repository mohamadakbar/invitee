@extends('layouts.admin')

@section('content')

@if($message = Session::get('error'))
    <div class="alert alert-danger" id="floating_alert" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ $message }}</strong>
    </div>
@endif

{{--{{ dd(Session::get('success')) }}--}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="floating_alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="">
    <div class="clearfix"></div>

    <form id="upload_form" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('form.update', ['slug' => $form->slug]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('form.form')
    </form>


</div>
@endsection
