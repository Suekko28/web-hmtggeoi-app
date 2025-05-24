@extends('layouts.navbar')

@section('navbar')
    <section id="userLanding">
        @include('user-landing.carousel')
        <div class="background-image fixed mx-auto top-20 -z-100 opacity-5 object-cover w-full h-full">
            <img src="{{ asset('/images/visual-6.jpg') }}" alt="Backround Image" class="w-full h-full object-cover">
        </div>
        @include('user-landing.sejarah')
        @include('user-landing.visi-misi')
        @include('user-landing.struktur')
        @include('user-landing.program-kerja')
        @include('user-landing.geoi-store')
        @include('layouts.footer')
    </section>
@endsection
