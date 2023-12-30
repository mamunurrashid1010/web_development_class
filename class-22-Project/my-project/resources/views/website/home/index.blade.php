@extends('website.layouts.app')
@section('content')

    <!-- ======= Hero Section ======= -->
    @include('website.components.homeComponents.hero')

    <!-- ======= About Section ======= -->
    @include('website.components.homeComponents.about')

    <!-- ======= Trainer Section ======= -->
    @include('website.components.homeComponents.course')

    <!-- ======= Trainer Section ======= -->
    @include('website.components.homeComponents.trainer')

@endsection


