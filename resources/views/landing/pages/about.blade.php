@extends('landing.layouts.app')

@section('content')

    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('frontAssets/img/inner/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Ab out us</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href={{ url('/home') }}>
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        About us
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
