@extends('front.layouts.app')

@section('content')
<section class="breadcrumb-section no-bg pt-0" id="block" style="width: 100%; "
    data-vide-bg="assets/This-Is-Egypt.mp4" data-vide-options="position: left, loop: true">
    <div class="breadcrumb-content overlay-black">
        <div class="row">
            <!-- <h1>Triumph</h1> -->
            <h5 style="right: 10px;margin-left: 15px;color: white;">Stay in the heart of Cairo.</h5>
            <div class="col-md-8">
                <form action="{{url('/')}}" >
                    <select id="loadHotelPage" name="hotel" class=" browser-default custom-select" >
                        <option selected>Select the hotel ..</option>
                        
                        @foreach ($hotels as $hotel)
                            <option value="{{$hotel->slug}}">{{$hotel->title_en}}</option>    
                        @endforeach
                        
                    </select>
                
                
            </div>
            <div class="col-md-2">
                <input type="submit"  class="btn btn-solid submit" value="Go">
                {{-- <a href="{{url('/')}}" type="submit" class="btn btn-solid submit">Go</a> --}}
            </div>
            </form>
            <br> 
            <br>
            
        </div>
    </div>
<!-- <div class="title-breadcrumb">Triumph</div> -->
</section>

<!-- app 2 -->
<section class="app-section medium-section">
    <img src="{{asset('assets/images/cab/app-bg.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="app-box">
                    <div>
                         <h2 style="color: #2b2a20;"> {!!(!empty($appSettingsData['landing_title'])) ? $appSettingsData['landing_title']['en'] : ''!!}</h2>
                        <p style="color: #2b2a20;">{!!(!empty($appSettingsData['landing_text'])) ? $appSettingsData['landing_text']['en'] : ''!!}</p>
                         
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- testimonial section start -->
<section class="testimonial_section section-b-space">
    <div class="container">
        <div class="title-1">
            <!-- <span class="title-label">Triumph Luxury</span> -->
            <h2 class="pb-0"> Guest Reviews</h2>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="slide-1 arrow-classic">
                    @foreach ($guestReviews as $guestReview)
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="{{$guestReview->cover_path}}" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>{{$guestReview->review_en}} </p>
                                <a href="{{$guestReview->link}}"><h3> {{$guestReview->name_en}}</h3></a>
                                <span style="color: #9a8348;" >{{$guestReview->hotel_en}}</span>
                                <br>
                                <br>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section bg-white small-section ratio2_3">
    <div class="container">
        <div class="filter-button-group">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".popular" class="">popular</li>
                <li data-filter=".latest" class="">latest</li>
                <li data-filter=".trend" class="">trend</li>
            </ul>
        </div>
        
    </div>
</section>
<!-- testimonial section end -->
@endsection