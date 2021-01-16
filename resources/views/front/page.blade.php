

@extends('front.layouts.app')

@section('title')
    {{(app()->getLocale() == 'en')? $page->title_en : $page->title_ar}}
@endsection
@section('content')
    <section class="breadcrumb-section pt-0">
        <img src="{{$page->cover_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
             
        </div>
        <div class="title-breadcrumb">Triumph</div>
    </section>
    <section class="about-section three-image about_page animated-section section-b-space">
        
        <div class="container">
            <!-- <div class="title-1">
                <span class="title-label">Triumph</span>
                <h2>Careers</h2>
            </div> -->
            <div class="row">
                
                <div class="col-xl-9">
                    <div class="about-text pl-0">
                        <div>
                            <!-- <div class="title-3">
                                <span class="title-label">Join us </span>
                            </div> -->
                        <!--  <h5><span>multipurpose theme</span></h5> -->
                            <h2 style="color: #9a8348;">{!! (app()->getLocale() == 'en')? $page->title_en : $page->title_ar !!}</h2>
                            <p>{!! (app()->getLocale() == 'en')? $page->content_en : $page->content_ar !!}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
           

            @if ($page->key == 'gym')
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
                        @if (in_array('gym_page',  json_decode( $hotel->gallery ,true)['gym_page']))
                            
                                    @foreach (json_decode( $hotel->gallery ,true)['gym_page'] as $image )
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
            @endif
            
        </div>
    </section>
@endsection