@extends('website.layouts.app')
@section('content')

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center top center" style="background: url('{{ asset('images/hero')}}/{{$hero->image}}')">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{ $hero->title1 }}<br>{{ $hero->title2 }}</h1>
      <h2>{{ $hero->description }}</h2>
      <a href="{{ url($hero->url) }}" class="btn-get-started">Get Started</a>
    </div>
  </section>
  <!-- End Hero -->

@endsection


