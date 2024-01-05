@extends('website.layouts.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Pricing</h2>
            <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div>
    <!-- End Breadcrumbs -->

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
                                    @if($feature1->packageFeature)
                                        @php array_push($featuresIds,$feature1->packageFeature->id) @endphp
                                        <li>{{ $feature1->packageFeature->name }}</li>
                                    @endif
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
                    @php $featuresIds=[]; @endphp
                @endforeach


            </div>

        </div>
    </section>
    <!-- End Pricing Section -->


@endsection
