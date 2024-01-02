@extends('admin.layouts.master')
@section('content')
    <style>
        /*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
        .pricing .box {
            padding: 20px;
            background: #fff;
            text-align: center;
            border: 1px solid #eef0ef;
            border-radius: 0;
            position: relative;
            overflow: hidden;
        }

        .pricing h3 {
            font-weight: 400;
            margin: -20px -20px 20px -20px;
            padding: 20px 15px;
            font-size: 16px;
            font-weight: 600;
            color: #777777;
            background: #f8f8f8;
        }

        .pricing h4 {
            font-size: 36px;
            color: #5fcf80;
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            margin-bottom: 20px;
        }

        .pricing h4 sup {
            font-size: 20px;
            top: -15px;
            left: -3px;
        }

        .pricing h4 span {
            color: #bababa;
            font-size: 16px;
            font-weight: 300;
        }

        .pricing ul {
            padding: 0;
            list-style: none;
            color: #444444;
            text-align: center;
            line-height: 20px;
            font-size: 14px;
        }

        .pricing ul li {
            padding-bottom: 16px;
        }

        .pricing ul i {
            color: #5fcf80;
            font-size: 18px;
            padding-right: 4px;
        }

        .pricing ul .na {
            color: #ccc;
            text-decoration: line-through;
        }

        .pricing .btn-wrap {
            margin: 20px -20px -20px -20px;
            padding: 20px 15px;
            background: #f8f8f8;
            text-align: center;
        }

        .pricing .btn-buy {
            background: #5fcf80;
            display: inline-block;
            padding: 8px 35px;
            border-radius: 50px;
            color: #fff;
            transition: none;
            font-size: 14px;
            font-weight: 400;
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            transition: 0.3s;
        }

        .pricing .btn-buy:hover {
            background: #3ac162;
        }

        .pricing .featured h3 {
            color: #fff;
            background: #5fcf80;
        }

        .pricing .advanced {
            width: 200px;
            position: absolute;
            top: 18px;
            right: -68px;
            transform: rotate(45deg);
            z-index: 1;
            font-size: 14px;
            padding: 1px 0 3px 0;
            background: #5fcf80;
            color: #fff;
        }
    </style>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Package manage</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Package</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="col-md-12">
                <div style="float: right">
                    <a href="{{ route('package.create') }}">
                        <button class="btn btn-info m-3">Create Package</button>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Package</h5>

                        <!-- ======= Pricing Section ======= -->
                        <section id="pricing" class="pricing">
                            <div class="container" data-aos="fade-up">
                                @php $featuresIds=[]; @endphp
                                <div class="row">
                                    @foreach($packages as $package)
                                        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                                            <div class="box">
                                                @if($package->tag)
                                                    <span class="advanced">{{ $package->tag }}</span>
                                                @endif
                                                <h3>{{ $package->title }}</h3>
                                                <h4><sup>$</sup>{{ $package->price }}<span> / {{ $package->duration }}</span></h4>
                                                <ul>
                                                    @foreach($package->packageFeature as $feature1)
                                                        @php array_push($featuresIds,$feature1->packageFeature->id) @endphp
                                                        <li>{{ $feature1->packageFeature->name }}</li>
                                                    @endforeach

                                                    @foreach($features as $feature)
                                                            @if(!in_array($feature->id,$featuresIds))
                                                                <li style="color: gray"><del>{{$feature->name}}</del></li>
                                                            @endif
                                                    @endforeach


                                                </ul>
                                                <div class="btn-wrap">
                                                    <a href="#" class="btn-buy">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                        </section>
                        <!-- End Pricing Section -->

                </div>
            </div>
        </div>
    </div>

@endsection
