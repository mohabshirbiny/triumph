@extends('front.layouts.app')

@section('title')
    {{(app()->getLocale() == 'en')? $restaurant->title_en : $restaurant->title_ar}}
@endsection
@section('content')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{$restaurant->cover_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <!-- <h2>Piccolino</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Piccolino</li>
                    </ol>
                </nav> -->
            </div>
        </div>
        <div class="title-breadcrumb">Triumph</div>
    </section>
    <!-- breadcrumb end -->

    


    <section class="about-section three-image about_page animated-section section-b-space">
        <div class="animation-section">
           <!-- <div class="cross po-1"></div>
            <div class="cross po-2"></div>
            <div class="cross po-3"></div>
            <div class="round po-4"></div>
            <div class="round po-5"></div>
            <div class="round r-2 po-6"></div>
            <div class="round r-2 po-7"></div>
            <div class="round r-y po-8"></div>
            <div class="round r-y po-9"></div>
            <div class="square po-10"></div>
            <div class="square po-11"></div>
            <div class="square s-2 po-12"></div>-->
        </div>
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
                            <div style="display: flex; justify-content: space-between;">
                                <h2 style="color: #9a8348;">    {{(app()->getLocale() == 'en')? $restaurant->title_en : $restaurant->title_ar}}
                                </h2> 
                                <div>
                                    <button class="btn btn-solid color1" type="button" onclick="collapseTxtBox1();" toggle="off">Book Now</button>
                                    <a href="{{route('restaurant.downloadFile',['id' => $restaurant->id,'hotel_slug'=>$hotel->slug])}}" target="_blank" class="btn btn-solid color1" type="button" onclick="collapseTxtBox1();" toggle="off">Download PDF</a>
                                </div>
                            </div>
                            <br>
                           <p>    {{(app()->getLocale() == 'en')? $restaurant->description_en : $restaurant->description_ar}}
                        </p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <h2 style="color: #9a8348; width: 100%; margin-top: 35px; margin-bottom: 25px; font-size: 1.7rem; padding-left: 15px;"> </h2>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i style="color: #9a8348;" class="fas fa-clock"></i>
                            <h4 style="color: #9a8348; font-size: 1.5rem; ">Opening Hours </h4>
                        </div>
                        <div class="contact_content">
                            <li>{{$restaurant->contact_details['open_hours']}}</li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                           <i style="color: #9a8348;" class="fas fa-user-tie"></i>
                            <h4 style="color: #9a8348; font-size: 1.5rem; ">Dress Code </h4>
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>{{$restaurant->contact_details['dress_code']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i style="color: #9a8348;" class="fas fa-phone-alt"></i>
							<h4 style="color: #9a8348; font-size: 1.5rem; ">phone</h4>
                            
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>{{$restaurant->contact_details['phone']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i  style="color: #9a8348;" class="fas fa-fax"></i>
							<h4 style="color: #9a8348; font-size: 1.5rem; ">fax</h4>
                            
                        </div>
                        <div class="contact_content">
                            <ul>
                               <li>{{$restaurant->contact_details['fax']}}</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                  <h2 style="color: #9a8348; width: 100%; margin-top: 35px; margin-bottom: 25px; font-size: 1.7rem; padding-left: 15px;"> </h2>
                @foreach ($restaurant->facilities as $facility)
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                           {{-- <i  style="color: #9a8348;" class="fas fa-wifi"></i> --}}
							<h4 style="color: #9a8348; font-size: 1.5rem; ">{{$facility->name_en}}</h4>
                          
                        </div>
                        <div class="contact_content">
                            <li>Avaliable</li>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>

        </div>
    </section>

    <!-- section start -->
    {{-- <section class="small-section bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ratio3_2">
                    <div class="product-wrapper-grid special-section grid-box">
                        <div class="row  content grid">
                            <div class="col-lg-4 col-sm-6 latest grid-item wow fadeInUp" data-class="latest">
                                <div class="special-box p-0">
                                    <div class="special-img">
                                        <a >
                                            <img src="../assets/images/restaurant/dishes/rest_01.JPG"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                    </div>
                                    <div class="special-content restaurant-detail">
                                        <a >
                                            <h5>Italian atmosphere
                                                
                                            </h5>
                                        </a>
                                        <ul>
                                            <li>Try our take on world-famous Lebanese cuisine at Layalina Restaurant</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 popular grid-item wow fadeInUp" data-class="popular">
                                <div class="special-box p-0">
                                    <div class="special-img">
                                        <a >
                                            <img src="../assets/images/restaurant/dishes/rest_02.JPG"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                    </div>
                                    <div class="special-content restaurant-detail">
                                        <a >
                                            <h5>All-day dining
                                                
                                            </h5>
                                        </a>
                                        <ul>
                                            <li>Pavilion is all about family gatherings & happy moments!</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 trend grid-item wow fadeInUp" data-class="trend">
                                <div class="special-box p-0">
                                    <div class="special-img">
                                        <a >
                                            <img src="../assets/images/restaurant/dishes/rest_03.JPG"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                    </div>
                                    <div class="special-content restaurant-detail">
                                        <a >
                                            <h5>Outdoor seating
                                                
                                            </h5>
                                        </a>
                                        <ul>
                                            <li>Start your lazy mornings with sunshine, welcoming aromas of fresh coffee</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> --}}
    <!-- section End -->
@endsection