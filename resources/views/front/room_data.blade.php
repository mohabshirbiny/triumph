@extends('front.layouts.app')

@section('title')
    {{(app()->getLocale() == 'en')? $room->title_en : $room->title_ar}}
@endsection
@section('content')
     <!-- breadcrumb start -->
     <section class="breadcrumb-section pt-0">
        <img src="{{$room->image_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <!-- <h2>pavilion</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">pavilion</li>
                    </ol>
                </nav> -->
            </div>
        </div>
        <div class="title-breadcrumb">Triumph</div>
    </section>
    <!-- breadcrumb end -->

    <br>    
    <br>    
    <br>    
    <br>    
    <br>    
    <br>    
    <br>    
    <div class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="search-panel" id="searchBar">
                        <div class="search-section shadow">
                            <form  name="resform" id="resform"  action="{{$hotel->booking_url}}" method="get" target="_blank">
                                <input type="hidden" name="HotelID" value="112895" />
                                <input type="hidden" name="LanguageID" value="1" />
                                <input type="hidden" name="Rooms" value="1" />
                                <div class="search-box">
                                    <div class="left-part">
                                        <div class="search-body title-hotel">
                                            <h6>Triumph</h6>
                                            <input type="text"  placeholder="{{$hotel->slug}}" class="form-control ">
                                        </div>
                                        <div class="search-body">
                                            <h6>check in</h6>
                                            <input type="text" value="{{date('m/d/y')}}" name="DateIn"  id="DateIn">

                                            {{-- <a href="javascript:openCalendar('DateIn')"> ss</a> --}}
                                        </div>
                                        <div class="search-body">
                                            <h6>check out</h6>
                                            <input type="text" value="{{date('m/d/y',strtotime("+1 day"))}}" name="DateOut"  id="DateOut">

                                            {{-- <a href="javascript:openCalendar('DateOut')"> ww</a> --}}
                                        </div>
                                        
                                        <div class="search-body">
                                            <h6>guests</h6>
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="fas fa-chevron-down"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="Adults"  class="form-control input-number"
                                                        value="1">
                                                    <span class="input-group-prepend">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="fas fa-chevron-up"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-body btn-search">
                                            <div class="right-part">
                                                
                                                <input type="submit" class="btn btn-solid color1" value="Book Now">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-section three-image about_page animated-section section-b-space">
         
        <div class="container">
            <!-- <div class="title-1">
                <span class="title-label">Triumph</span>
                <h2>Careers</h2>
            </div> -->
            <div class="row">
                
                <div class="col-xl-12">
                    <div class="about-text pl-0">
                        <div>
                            <!-- <div class="title-3">
                                <span class="title-label">Join us </span>
                            </div> -->
                          <!--  <h5><span>multipurpose theme</span></h5> -->
                            <h2 style="color: #9a8348;">{{(app()->getLocale() == 'en')? $room->title_en : $room->title_ar}}</h2><br>
                            <p>{{(app()->getLocale() == 'en')? $room->about_en : $room->about_ar}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-b-space animated-section">
         
        <div class="container">
            <div class="title-3">
                <!-- <span class="title-label">Triumph</span> -->
                <h2>Classic Room Facilities </h2>
                <!-- <p style="color: black;font-size: 20px;line-height: 25px;">Shopping Stay tuned for our amazing shopping arcade that will be opening its doors to our guests very soon and will be housing some of your favorite brand names & stores. </p> -->
            </div>
            <div class="row service_section">
                @foreach ($room->facilities as $facility)
                    <div class="col-lg-4 col-6">
                        <div class="service-wrap">
                            <div>
                                <div class="service-icon">
                                    <img src="{{$facility->icon_path}}" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <h5>{{(app()->getLocale() == 'en')? $facility->name_en : $facility->name_ar}}</h5>
                                <!-- <p>Culinary creativity is signature of Triumph Luxury Hotel. Whether looking for a casual coffee at Osais lobby lounge, a family....</p> -->
                            </div>
                        </div>
                    </div>    
                @endforeach
                
                
            </div>
        </div>
    </section>

@endsection