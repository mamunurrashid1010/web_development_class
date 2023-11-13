<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('images/about/') }}/{{ $about->image }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>{{ $about->title }}</h3>
                {{--                    <p class="fst-italic">--}}
                {{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
                {{--                        magna aliqua.--}}
                {{--                    </p>--}}
                {{--                    <ul>--}}
                {{--                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
                {{--                        <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
                {{--                        <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>--}}
                {{--                    </ul>--}}
                <p>{{ $about->description }}</p>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
    <div class="container">
        <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Students</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                <p>Courses</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                <p>Events</p>
            </div>
            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Trainers</p>
            </div>
        </div>
    </div>
</section><!-- End Counts Section -->
