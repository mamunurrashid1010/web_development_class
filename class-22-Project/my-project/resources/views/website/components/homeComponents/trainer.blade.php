<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach($trainers as $trainer)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{ asset('images/trainer/') }}/{{$trainer->image}}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>{{$trainer->name}}</h4>
                            <span>{{ $trainer->designation }}</span>
                            <p>
                                {{ $trainer->description }}
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End Trainers Section -->
