@extends('layouts.master')

@section('title', 'Modernize Bootstrap Admin')

@section('css')
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
@endsection

@section('pageContent')
    <div class="container">
        <h3 class="title">Program Kerja</h3>
        <div class="content">
            <div class="item">
                <a href="{{ route('p-pam.index') }}">
                    <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('/images/mining-cart.png') }}" width="50" height="50"
                                    class="mb-3 mx-auto" alt="modernize-img" />
                                <p class="fw-semibold fs-3 text-primary mb-1">
                                    P-PAM
                                </p>
                                <h5 class="fw-semibold text-primary mb-0">{{ $dataPPAM }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('orienteering-nasional.index') }}">
                    <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('/images/compass.png') }}" width="50" height="50" height="50"
                                    class="mb-3 mx-auto" alt="modernize-img" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Orienteering Nasional</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$dataOrienteeringNasional}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('geoi-fair.index') }}">
                    <div class="card border-0 zoom-in bg-success-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('/images/calendar.png') }}" width="50" height="50" height="50"
                                    class="mb-3 mx-auto" alt="modernize-img" />
                                <p class="fw-semibold fs-3 text-success mb-1">GEOI Fair</p>
                                <h5 class="fw-semibold text-success mb-0">{{$dataGEOIFair}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="">
                    <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('/images/confetti.png') }}" width="50" height="50" height="50"
                                    height="50" class="mb-3 mx-auto" alt="modernize-img" />
                                <p class="fw-semibold fs-3 text-danger mb-1">HUT HMTG "GEOI"</p>
                                <h5 class="fw-semibold text-danger mb-0">{{$dataHutHMTG}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="title">Alumni</h3>
        <div class="flex lg:flex-nowrap sm:flex-wrap justify-center gap-6 content">
            <div class="item">
                <a href="">
                    <div class="card border-0 zoom-in bg-secondary-subtle shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('/images/graduates.png') }}" width="50" height="50" height="50"
                                    height="50" class="mb-3 mx-auto" alt="modernize-img" />
                                <p class="fw-semibold fs-3 text-secondary mb-1">
                                    Alumni
                                </p>
                                <h5 class="fw-semibold text-secondary mb-0">{{$dataAlumni}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ URL::asset('build/js/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/dashboards/dashboard.js') }}"></script>
@endsection
