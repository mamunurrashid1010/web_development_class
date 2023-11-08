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

            <h1>Hero</h1>
        </div>
        <div class="col-md-12">
            @if($hero)
                <a href="{{ route('hero.edit') }}">
                    <button class="btn btn-warning m-3">Edit</button>
                </a>
            @else
                <a href="{{ route('hero.create') }}">
                    <button class="btn btn-info m-3">Create</button>
                </a>
            @endif
        </div>

        <!-- content -->
        <div class="col-md-6">
            @if($hero)
                <div class="card">
                    <img src="{{ asset('images/hero') }}/{{$hero->image}}" class="card-img-top" alt="..." style="width: 100%; height:auto">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hero->title1 }}</h5>
                        <h5 class="card-title">{{ $hero->title2 }}</h5>
                        <p class="card-text">{{ $hero->description }}</p>
                        <a href="#" class="btn btn-primary">Get started : {{ $hero->url }}</a>
                    </div>
                </div>
            @else
                <div class="alert alert-info"> No data found.</div>
            @endif
        </div>

    </div>
</div>



@endsection
