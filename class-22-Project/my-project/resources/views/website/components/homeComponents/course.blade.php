<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Courses</h2>
            <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                    <img src="{{ asset('images/course/') }}/{{$course->image}}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>{{ $course->category }}</h4>
                            <p class="price">{{ $course->fee }} BDT</p>
                        </div>

                        <h3><a href="{{ route('website.course.show',$course->id) }}">{{ $course->name }}</a></h3>
                        <p>{{ $course->short_desc }}</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="{{ asset('images/trainer/') }}/{{$course->trainer->image}}" class="img-fluid" alt="">
                                <span>{{ $course->trainer->name }}</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;50
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;65
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Course Item-->
            @endforeach
        </div>

    </div>
</section><!-- End Popular Courses Section -->
