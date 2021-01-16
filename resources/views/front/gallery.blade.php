@extends('front.layouts.app')

@section('title')
    About Us
@endsection
@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{$hotel->pages()->where('key','gallery')->first()->cover_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>Gallery</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Triumph</div>
    </section>
    <!-- breadcrumb end -->

    <!-- portfolio section start -->
    <section class="portfolio-section bg-white small-section ratio2_3">
        <div class="container">
            <div class="filter-button-group" style="display: none;        ">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".popular">popular</li>
                    <li data-filter=".latest">latest</li>
                    <li data-filter=".trend">trend</li>
                </ul>
            </div>
            <div class="row content grid zoom-gallery">
                @if (json_decode( $hotel->gallery ,true))
                @if (json_decode( $hotel->gallery ,true)['gallery_page'])
                    
                            @foreach (json_decode( $hotel->gallery ,true)['gallery_page'] as $image )
                                <div class="popular grid-item wow fadeInUp col-sm-6">
                                    <a href="{{url('images/hotel_files/'.$image)}}">
                                        <div class="instagram-box">
                                            <img src="{{url('images/hotel_files/'.$image)}}" alt=""
                                                class="img-fluid blur-up lazyload bg-img">
                                            <div class="overlay">
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                            @endforeach
                        @endif
                        @endif
            </div>
        </div>
    </section>
    <!-- portfolio section end -->
    

@endsection