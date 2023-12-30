@extends('website.layouts.app')
@section('content')
    <style>
        /*--------------------------------------------------------------
        # Cource Details
        --------------------------------------------------------------*/
        .course-details h3 {
            font-size: 24px;
            margin: 30px 0 15px 0;
            font-weight: 700;
            position: relative;
            padding-bottom: 10px;
        }

        .course-details h3:before {
            content: "";
            position: absolute;
            display: block;
            width: 100%;
            height: 1px;
            background: #eef0ef;
            bottom: 0;
            left: 0;
        }

        .course-details h3:after {
            content: "";
            position: absolute;
            display: block;
            width: 60px;
            height: 1px;
            background: #5fcf80;
            bottom: 0;
            left: 0;
        }

        .course-details .course-info {
            background: #f6f7f6;
            padding: 10px 15px;
            margin-bottom: 15px;
        }

        .course-details .course-info h5 {
            font-weight: 400;
            font-size: 16px;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .course-details .course-info p {
            margin: 0;
            font-weight: 600;
        }

        .course-details .course-info a {
            color: #657a6d;
        }

        /*--------------------------------------------------------------
        # Cource Details Tabs
        --------------------------------------------------------------*/
        .cource-details-tabs {
            overflow: hidden;
            padding-top: 0;
        }

        .cource-details-tabs .nav-tabs {
            border: 0;
        }

        .cource-details-tabs .nav-link {
            border: 0;
            padding: 12px 15px 12px 0;
            transition: 0.3s;
            color: #37423b;
            border-radius: 0;
            border-right: 2px solid #e2e7e4;
            font-weight: 600;
            font-size: 15px;
        }

        .cource-details-tabs .nav-link:hover {
            color: #5fcf80;
        }

        .cource-details-tabs .nav-link.active {
            color: #5fcf80;
            border-color: #5fcf80;
        }

        .cource-details-tabs .tab-pane.active {
            animation: fadeIn 0.5s ease-out;
        }

        .cource-details-tabs .details h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #37423b;
        }

        .cource-details-tabs .details p {
            color: #777777;
        }

        .cource-details-tabs .details p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 992px) {
            .cource-details-tabs .nav-link {
                border: 0;
                padding: 15px;
            }

            .cource-details-tabs .nav-link.active {
                color: #fff;
                background: #5fcf80;
            }
        }
    </style>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Courses</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <img src="{{ asset('images/course') }}/{{ $course->image }}" class="img-fluid" alt="">
                    <h3>{{ $course->name }}</h3>
                    <p>
                        {{ $course->long_desc }}
                    </p>
                </div>
                <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Trainer</h5>
                        <p><a href="#">{{ $course->trainerName->name }}</a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Course Fee</h5>
                        <p>{{ $course->fee }} BDT</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Available Seats</h5>
                        <p>{{ $course->total_seat }}</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Schedule</h5>
                        <p>{{ $course->schedule }}</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Cource Details Section -->

    <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        @foreach($course->feature as $feature)
                            <li class="nav-item">
                                <a class="nav-link @if($loop->first) active show @endif" data-bs-toggle="tab" href="#tab-{{ $feature->id }}">{{ $feature->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0 mb-5 ">
                    <div class="tab-content">
                        @foreach($course->feature as $feature)
                            <div class="tab-pane @if($loop->first) active show @endif" id="tab-{{ $feature->id }}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>{{ $feature->title }}</h3>
                                        <p class="fst-italic">{{ $feature->short_desc }}</p>
                                        <p>{{ $feature->desc }}</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('images/course/feature/') }}/{{ $feature->image }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Cource Details Tabs Section -->

@endsection

