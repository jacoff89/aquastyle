@extends('layouts.app')

@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ Vite::asset('resources/images/bg-about.jpg') }}">)
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h1 class="breadcrumbs-custom-title">{{ $page->title }}</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li class="active">{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Privacy Policy-->
    <section class="section section-xxl bg-default text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-12">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
