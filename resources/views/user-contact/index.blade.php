@extends('layouts.navbar')

@section('navbar')
    <style>
        nav {
            background-color: white !important;
            color: black !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        nav a {
            color: black !important;
        }

        nav a:hover {
            color: #ea580c !important;
        }

        nav .text-white {
            color: black !important;
        }

        nav h6,
        nav span {
            color: black !important;
        }

        #socialIcons {
            background-color: var(--color-orange-primary)
        }

        .social-media {
            background-color: none !important;
        }
    </style>

        @include('user-contact.card')
        @include('layouts.footer')
    </section>
@endsection
