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
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/7c/01/default-avatar-2020-5.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>Absolutely It was great accommodation specially guest room service was friendly and helpful , food was delicious and fresh , room is clean with agood view location ( Deluxe room is perfect ) . totally recommended </p>
                                <a href="https://www.tripadvisor.com/ShowUserReviews-g294201-d15190206-r777797383-Triumph_Luxury_Hotel-Cairo_Cairo_Governorate.html"><h3> Mohamed M Eltantawy</h3></a>
                                <span style="color: #9a8348;" >Triumph Luxury</span>
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
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/de/0a/default-avatar-2020-35.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>Outstanding stay, unexpected level of luxury, friendly staff. also breakfast was fresh and clean, Parking Was Very Expensive but otherwise its safe and respectful staff, Music played was very soft and relaxing.</h3>
                                <h3><a href="https://www.tripadvisor.com/ShowUserReviews-g294201-d15190206-r776881525-Triumph_Luxury_Hotel-Cairo_Cairo_Governorate.html"></a> Moemen El-Zamzamy</h3>
                                <span style="color: #9a8348;" >Triumph Luxury</span>
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
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/09/5d/2f/48/omar-a.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>I have had one of the most exciting food experiences, the restaurant setup is perfect and the staff is very friendly and welcoming especially Morcos who really take care of us from the moment we entered

                                
                                    </h3>
                                <h3><a href="https://www.tripadvisor.com/ShowUserReviews-g297549-d14136419-r776557911-S_Square_Samurai-Hurghada_Red_Sea_and_Sinai.html"></a>Omar</h3>
                                <span style="color: #9a8348;" >Triumph Luxury</span>
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
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e4/ca/default-avatar-2020-51.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>We stayed for 5 days This hotel is an excellent choice we had a very calm stay and the staff was very helpful and welcoming will definitely repeat this visit also their food is delicious and the prices are very reasonable

                                </p>
                                    </h3>
                                <a href="https://www.tripadvisor.com/ShowUserReviews-g294201-d1201610-r779053634-Triumph_Plaza_Hotel-Cairo_Cairo_Governorate.html"><h3>Dalia Genedy</h3> </a>
                                <span style="color: #9a8348;" >Triumph PLAZA</span>
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
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e7/fe/default-avatar-2020-58.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>A good hotel with a good service and cooperative crew...there was a free wifi with a good breakfast...also, home service has a policy to change tawel on daily basis as a precaution for covid-19...tea and coffe with kettle was for free at ur room
                                </p>
                                    </h3>
                                <a href="https://www.tripadvisor.com/ShowUserReviews-g294201-d1201610-r778928868-Triumph_Plaza_Hotel-Cairo_Cairo_Governorate.html"><h3>Abdallah D</h3> </a>
                                <span style="color: #9a8348;" >Triumph PLAZA</span>
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
                    <div>
                        <div class="testimonial">
                            <div class="top-part">
                                <div class="img-part">
                                    <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
                                    <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/ed/00/default-avatar-2020-4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                    <i class="fas fa-heart heart-icon"><span class="effect"></span></i>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <p>The most helpful people I have ever seen the quick response and the quality of everything.. I can’t thank all of u enough.. mr Beshoy was like a brother for being helpful and really want to make the event so smooth and unique.. and a special thanks to me shady and the really talented DJ Eslam </p>
                                    </h3>
                                <a href="https://www.tripadvisor.com/ShowUserReviews-g294201-d1201610-r778928868-Triumph_Plaza_Hotel-Cairo_Cairo_Governorate.html"><h3>Ramy E</h3> </a>
                                <span style="color: #9a8348;" >Triumph PLAZA</span>
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
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial section end -->
@endsection