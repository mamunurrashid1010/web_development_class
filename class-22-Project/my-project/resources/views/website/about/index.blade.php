@extends('website.layouts.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>About Us</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    @include('website.components.homeComponents.about')

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>What are they saying</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('images/testimonial/') }}/{{$testimonial->image}}" class="testimonial-img" alt="">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <h4>{{ $testimonial->title }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ $testimonial->message }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    @endforeach


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

@endsection
