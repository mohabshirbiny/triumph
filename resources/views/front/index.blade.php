@extends('front.layouts.app')

@section('content')
    <!-- home section start -->
    @include('front.layouts.slider')
    <!-- home section end -->


    <!-- search section start -->
    {{-- <div class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="search-panel" id="searchBar">
                        <div class="search-section shadow">
                            <div class="search-box">
                                <div class="left-part">
                                    <div class="search-body title-hotel">
                                        <h6>hotel</h6>
                                        <input type="text" name="text" placeholder="Truimph" class="form-control ">
                                    </div>
                                    <div class="search-body">
                                        <h6>check in</h6>
                                        <input placeholder="18 april" id="datepicker" />
                                    </div>
                                    <div class="search-body">
                                        <h6>check out</h6>
                                        <input placeholder="20 april" id="datepicker1" />
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
                                                <input type="text" name="quantity" class="form-control input-number"
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
                                            <a href="#" class="btn btn-solid color1">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- search section end -->


    <!-- about section start -->
    @include('front.layouts.about')
    <!-- about section end -->


    <!-- room & suits section start-->
    <section class="ticket-section section-b-space white-section animated-section">
        <div class="animation-section">
            <div class="cross po-1"></div>
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
            <div class="square s-2 po-12"></div>
        </div>
        <div class="container">
            <div class="title-3">
                <span class="title-label">about</span>
                <h2>rooms & suits<span>hotel</span></h2>
            </div>
            <div class="slide-1">
                <div>
                    <div class="row">
                        <div class="col-lg-7 offset-lg-4 col-md-10 offset-md-1">
                            <div class="ticket-box">
                                <div class="ticket-title">
                                    <h6>see rooms</h6>
                                    <span><i class="fas fa-key"></i></span>
                                </div>
                                <div class="image-box">
                                    <img src="Triumph0052.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="content">
                                    <div class="detail">
                                        <h4><span>$450</span> / per night</h4>
                                        <h2>Deluxe room 5</h2>
                                        <h6>Deluxe <span>room</span></h6>
                                        <p>Enjoy fantastic pool view or garden views in our Deluxe Rooms, which are spacious havens of comfort adorned with earthy tones to create a warm atmosphere. These contemporary rooms occupy an average size of 50 sqm and...........</p>
                                        <a href="#" class="btn btn-solid">book now</a>
                                    </div>
                                    <div class="barcode-design">
                                        <img src="{{ asset('assets/images/barcode.png')}}" alt=""
                                            class="img-fluid blur-up lazyload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-lg-7 offset-lg-4 col-md-10 offset-md-1">
                            <div class="ticket-box">
                                <div class="ticket-title">
                                    <h6>see rooms</h6>
                                    <span><i class="fas fa-key"></i></span>
                                </div>
                                <div class="image-box">
                                    <img src="Triumph0044.jpg"
                                        class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="content">
                                    <div class="detail">
                                        <h4><span>$450</span> / per night</h4>
                                        <h2>Deluxe Room 5</h2>
                                        <h6>family <span>room</span></h6>
                                        <p>Enjoy fantastic pool view or garden views in our Deluxe Rooms, which are spacious havens of comfort adorned with earthy tones to create a warm atmosphere. These contemporary rooms occupy an average size of 50 sqm and...........</p>
                                        <a href="#" class="btn btn-solid">book now</a>
                                    </div>
                                    <div class="barcode-design">
                                        <img src="{{ asset('assets/images/barcode.png')}}" alt="eee"
                                            class="img-fluid blur-up lazyload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room & suits section end-->


    <!-- gallery section strat -->
    
    <!-- gallery section end -->


    <!-- special room section start -->
    <section class="section-b-space special-section ratio2_3 animated-section">
        <div class="animation-section">
            <div class="cross po-1"></div>
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
            <div class="square s-2 po-12"></div>
        </div>
        <div class="container">
            <div class="title-3">
                <span class="title-label">our</span>
                <h2>special room<span>special</span></h2>
            </div>
            <div class="slide-3">
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="#">
                                <img src="DSC_6025.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div>
                        </div>
                        <div class="special-content">
                            <a href="#">
                                <h5>Junior Suite</h5>
                            </a>
                            <p>
                                Our Junior Suites provide a superior level of comfort for guests desiring the privilege of exclusivity and extra space. Unwind in a beautifully decorated area of 55 sqm and enjoy stunning pool view.......  
                            </p>
                            <div class="bottom-part">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="package-cls">
                                    5 day | 4 night
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="#">
                                <img src="Triumph226.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div>
                        </div>
                        <div class="special-content">
                            <a href="#">
                                <h5>Deluxe Room</h5>
                            </a>
                            <p>
                                Enjoy fantastic pool view or garden views in our Deluxe Rooms, which are spacious havens of comfort adorned with earthy tones to create a warm atmosphere.......
                            </p>
                            <div class="bottom-part">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="package-cls">
                                    5 day | 4 night
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="#">
                                <img src="Triumph208.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div>
                        </div>
                        <div class="special-content">
                            <a href="#">
                                <h5>Superior Room</h5>
                            </a>
                            <p>
                                Our Superior Rooms provide a contemporary sanctuary of comfort, decorated with earthy tones to create a soothing ambience......
                            </p>
                            <div class="bottom-part">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="package-cls">
                                    5 day | 4 night
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="#">
                                <img src="../assets/images/hotel/room/2.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div>
                        </div>
                        <div class="special-content">
                            <a href="#">
                                <h5>Lorem Ipsum is simply dummy.</h5>
                            </a>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing typesetting industry. Lorem Ipsum has
                                been the indu standard dummy text ever since the 1500s..............
                            </p>
                            <div class="bottom-part">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="package-cls">
                                    5 day | 4 night
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- special room section end -->


    <!-- video section start -->
    <section class="video-section parallax-img">
        <img src="Triumph47.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="basic-section">
                        <h2>relax and enjoy</h2>
                        <h4>luxury hotel & best resort</h4>
                        <div data-toggle="modal" data-target="#video" class="video-icon">
                            <span></span>
                            <div class="animation-circle-inverse"><i></i><i></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade video-modal" id="video" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <iframe src="https://www.youtube.com/embed/HKprK9kDfEg" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- video section end -->


    <!-- service section start -->
    
    <!-- service section end -->


    <!-- subscribe section start -->
    <section class="medium-section parallax-img subscribe-section">
        <img src="0D7A9005.jpg" class="bg-img" alt="">
        <div class="container">
            <div class="title-1">
                <span class="title-label">our</span>
                <h2 class="text-white">subscribe</h2>
            </div>
            <div class="row">
                <div class="offset-xl-3 col-xl-6 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Your Email Address"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-solid" type="button" id="button-addon2">subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe section end-->


    <!-- testimonial section start -->
    <section class="testimonial-section  animated-section">
        <div class="animation-section">
            <div class="cross po-2"></div>
            <div class="round po-5"></div>
            <div class="round r-2 po-6"></div>
            <div class="round r-2 po-7"></div>
            <div class="round r-y po-8"></div>
            <div class="square po-10"></div>
            <div class="square s-2 po-12"></div>
        </div>
        <div class="container ">
            <div class="title-3">
                <span class="title-label">our</span>
                <h2>our happy customer<span>customer</span></h2>
            </div>
            <div class="slide-1">
                <div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="testimonial">
                                <div class="left-part">
                                    <img src="16.jpg" class="img-fluid blur-up lazyload" alt="">
                                    <div class="design">
                                        <i class="fas fa-comments"></i>
                                        <i class="fas fa-comments light"></i>
                                    </div>
                                </div>
                                <div class="right-part">
                                    <p>
                                        "When you innovate, you make mistakes.It is best to admit them quickly, & get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="detail">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h6>lara denal</h6>
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="testimonial">
                                <div class="left-part">
                                    <img src="../assets/images/avtar/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                    <div class="design">
                                        <i class="fas fa-comments"></i>
                                        <i class="fas fa-comments light"></i>
                                    </div>
                                </div>
                                <div class="right-part">
                                    <p>
                                        "When you innovate, you make mistakes.It is best to admit them quickly, & get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="detail">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h6>denal lara</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="testimonial">
                                <div class="left-part">
                                    <img src="../assets/images/avtar/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                    <div class="design">
                                        <i class="fas fa-comments"></i>
                                        <i class="fas fa-comments light"></i>
                                    </div>
                                </div>
                                <div class="right-part">
                                    <p>
                                        "When you innovate, you make mistakes.It is best to admit them quickly, & get on
                                        with improving your other innovations."
                                    </p>
                                    <div class="detail">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h6>denal lara</h6>
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


    <!-- instagram section start -->
    <section class="pt-0">
        <div class="container-fluid ratio_square instgram-slider">
            <div class="row">
                <div class="col p-0">
                    <div class="slide-6 no-arrow ">
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="Triumph8.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="Triumph7553.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="0D7A8991.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="Triumph7577.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="Triumph7594.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="FINA1L.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <div class="instagram-box">
                                    <img src="../assets/images/instagram/9.jpg" alt=""
                                        class="img-fluid blur-up lazyload bg-img">
                                    <div class="overlay">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->


@endsection