@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- flash message -->
        <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

            <h1>Hero index page</h1>
            <a href="{{ route('hero.create') }}">
                <button class="btn btn-info m-3">Create</button>
            </a>
        </div>
    </div>
</div>



@endsection
