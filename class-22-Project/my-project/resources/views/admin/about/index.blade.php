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

                <h1>About </h1>
            </div>
            <div class="col-md-12">
                @if($about)
                    <a href="{{ route('about.edit') }}">
                        <button class="btn btn-warning m-3">Edit</button>
                    </a>
                @else
                    <a href="{{ route('about.create') }}">
                        <button class="btn btn-info m-3">Create</button>
                    </a>
                @endif
            </div>

            <!-- content -->
            <div class="col-md-6">
                @if($about)
                    <div class="card">
                        <img src="{{ asset('images/about') }}/{{$about->image}}" class="card-img-top" alt="..." style="width: 100%; height:auto">
                        <div class="card-body">
                            <h5 class="card-title">{{ $about->title }}</h5>
                            <p class="card-text">{{ $about->description }}</p>
                        </div>
                    </div>
                @else
                    <div class="alert alert-info"> No data found.</div>
                @endif
            </div>

        </div>
    </div>
@endsection
