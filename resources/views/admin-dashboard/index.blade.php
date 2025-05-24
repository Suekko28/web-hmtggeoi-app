@extends('layouts.master')

@section('title', 'Modernize Bootstrap Admin')

@section('css')
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
@endsection

@section('pageContent')

    <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-body hstack align-items-start gap-6">
            <i class="ti ti-alert-circle fs-6"></i>
            <div>
                <h5 class="text-white fs-3 mb-1">Welcome to Modernize</h5>
                <h6 class="text-white fs-2 mb-0">Easy to customize the Template!!!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
    <div class="container">
        <h1 class="title">Program Kerja</h1>
        <div class="flex lg:flex-nowrap sm:flex-wrap justify-center gap-6 content">
            <div class="item">
                <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ URL::asset('build/images/svgs/icon-user-male.svg') }}" width="50"
                                height="50" class="mb-3 mx-auto" alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-primary mb-1">
                                P-PAM
                            </p>
                            <h5 class="fw-semibold text-primary mb-0">96</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ URL::asset('build/images/svgs/icon-briefcase.svg') }}" width="50"
                                height="50" class="mb-3 mx-auto" alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-warning mb-1">Orienteering Nasional</p>
                            <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ URL::asset('build/images/svgs/icon-mailbox.svg') }}" width="50" height="50"
                                class="mb-3 mx-auto" alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-info mb-1">GEOI Fair</p>
                            <h5 class="fw-semibold text-info mb-0">356</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ URL::asset('build/images/svgs/icon-favorites.svg') }}" width="50"
                                height="50" class="mb-3 mx-auto" alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-danger mb-1">HUT HMTG "GEOI"</p>
                            <h5 class="fw-semibold text-danger mb-0">696</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="title">Alumni</h1>
        <div class="flex lg:flex-nowrap sm:flex-wrap justify-center gap-6 content">
            <div class="item">
                <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ URL::asset('build/images/svgs/icon-user-male.svg') }}" width="50"
                                height="50" class="mb-3 mx-auto" alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-primary mb-1">
                                Alumni
                            </p>
                            <h5 class="fw-semibold text-primary mb-0">96</h5>
                        </div>
                    </div>
                </div>
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
