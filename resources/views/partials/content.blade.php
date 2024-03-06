@extends('partials.main')
@include('partials.topnav')

@include('partials.sidebar')
@section('body')
    @yield('body_content')
@include('partials.footer')
@endsection
