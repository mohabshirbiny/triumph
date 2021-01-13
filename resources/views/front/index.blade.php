@extends('front.layouts.app')

@section('content')
<script language="javascript" type="text/javascript">
    function openCalendar(FormElement){
        var calendarwindow;
        url = "calendar.html?formname=resform&formelement=" + FormElement;
        calendarwindow = window.open(url,"calendar","toolbar=no,width=200,height=144,top=50,left=50,status=no,scrollbars=no,resize=no,menubar=no");
        calendarwindow.focus();
    }
    </script>
    <!-- home section start -->
    @include('front.layouts.slider')
    <!-- home section end -->

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
                                            <input type="text" name="DateIn"  id="DateIn">

                                            {{-- <a href="javascript:openCalendar('DateIn')"> ss</a> --}}
                                        </div>
                                        <div class="search-body">
                                            <h6>check out</h6>
                                            <input type="text" name="DateOut"  id="DateOut">

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
    
    <!-- about 3 start -->
    <section class="about_section section-b-space">
        <div class="container">
            <!-- <div class="title-3">
                <span class="title-label">history of</span>
                <h2>our restaurant<span>restaurant</span></h2>
            </div> -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_img">
                        <div class="side-effect"><span></span></div>
                        <img src="{{asset('assets/panel2.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_content">
                        <div>
                            <h5>stay in the heart of cairo </h5>
                            <h2 style="color: #9a8348;" >Triumph Luxury Hotel</h2>
                            <p style="color: #606060;">Contemporary designs, elegant interiors, and perfect location! Triumph Luxury Hotel is ideal for families, couples & business travelers alike. With its prime location in one of New Cairo’s best districts, the 5th settlement, the hotel is just a few minutes away from the business district, top shopping venues, and some of the best night spots in town. The hotel also lies in close proximity to Cairo International Airport. Triumph Luxury Hotel offers you the ultimate hospitality experience you can wish for, in a warm & friendly manner.</p>
                            <div class="about_bottom">
                                <a href="mailto:Info@Triumphhotels.com" class="btn btn-rounded btn-sm color1">E-mail</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about 3 end -->



    <!-- special room section start -->
    <section class="section-b-space special-section ratio2_3 animated-section" style="margin-top: -140px;">
        
        <div class="container">
            <div class="title-3">
                <!-- <span class="title-label">our</span> -->
                <h2 style="color: #9a8348;">Rooms</h2>
            </div>
            <div class="slide-3 arrow-classic">
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Classic-Rooms.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5>Classic Rooms </h5>
                            </a>
                            <p>
                                With pool view
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Pool-Twin-Rooms.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5>Pool Twin Rooms </h5>
                            </a>
                            <p>With pool view</p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Executive-Rooms-with-Pool-or-Garden-view.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5>Executive Rooms with Pool or Garden view </h5>
                            </a>
                            <p>
                                With pool view    
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Deluxe-Rooms.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5> Deluxe Rooms</h5>
                            </a>
                            <p>
                                With pool view
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Superior-Rooms.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5> Superior Rooms </h5>
                            </a>
                            <p>
                                With pool view
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Junior-Suites.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5>Junior Suites </h5>
                            </a>
                            <p>
                                With pool view
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Junior-Suite-With-Balcony.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5>Junior Suite With Balcony </h5>
                            </a>
                            <p>
                                With pool view
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348;" href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="special-box p-0">
                        <div class="special-img">
                            <a href="classic_room.html">
                                <img src="../assets/images/rooms_types_sml/Family-Rooms.jpg" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </a>
                            <!-- <div class="label">
                                <i class="fas fa-percent"></i>
                                <h3><del>$24</del> $20</h3>
                            </div> -->
                        </div>
                        <div class="special-content" style="text-align: center;">
                            <a href="#">
                                <h5>Family Rooms </h5>
                            </a>
                            <p>
                                With pool view
                            </p>
                            <a style="background: white;color: #9a8348;border-color: #9a8348; " href="classic_room.html" class="btn btn-curve">find out more</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- special room section end -->


    <!-- video section start -->
    <section class="video-section parallax-img">
        <img src="{{asset('assets/Triumph47.jpg')}}" alt="" class="img-fluid blur-up lazyload bg-img">
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


    <!-- blog section start -->
    <section class="blog-section section-b-space">
        <div class="container">
            <div class="slide-2  no-arrow ">
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{asset('assets/thumb_dining.jpg')}}" class="img-fluid blur-up lazyload w-100"
                                    alt="">
                            </div>
                            <!-- <div class="blog-date">
                                <div>
                                    <h5>01</h5>
                                    <h6>jan</h6>
                                </div>
                            </div>-->
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>Restaurants</h5>
                                <p>Indulge Your Taste Palette</p>
                                <h6>At Triumph Luxury Hotel, you will experience a culinary experience like no other! Gastronomic creativity is part of our food culture; whether you want to grab a casual cup of freshly brewed coffee at Oasis lobby lounge, or a family brunch at Pavilion restaurant, or an Al Fresco Italian dinner at Piccolino restaurant ..<br></br></h6>
                                <a href="restaurants.html" class="btn btn-solid">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{asset('assets/thumb_meet.jpg')}}" class="img-fluid blur-up lazyload w-100"
                                    alt="">
                            </div>
                           <!-- <div class="blog-date">
                                <div>
                                    <h5>24</h5>
                                    <h6>feb</h6>
                                </div>
                            </div>-->
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>Meet & Celebrate</h5>
                                <p>When Business Meets Luxury</p>
                                <h6>Meet Our 18 flexible exhibition, conference, banqueting, and meeting suites, each equipped with the very latest audiovisual and lighting technology, as well as our quality catering options will ensure that your upcoming business meetings and corporate events will be a great success ..<br></br></h6>
                                <a href="meet.html" class="btn btn-solid">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- blog section end -->






    <!-- subscribe section start -->
    <section class="medium-section parallax-img subscribe-section">
        <img src="{{asset('assets/0D7A9005.jpg')}}" class="bg-img" alt="">
        <div class="container">
            <div class="title-1">
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


    <section class="about-section section-b-space">
        <div class="container">
            <div class="title-1 detail-title">
                <!-- <span class="title-label">why choose rica?</span> -->
                <h2>Good to know</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam at, aut commodi
                    corporis dolorum ducimus labore magnam mollitia natus porro possimus quae sit tenetur veniam
                    veritatis voluptate voluptatem!</p> -->
            </div>
            <div class="highlight-section">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="highlight-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <svg viewBox="0 0 496 496" xmlns="http://www.w3.org/2000/svg">
                                <path d="m496 390.617188v-69.234376c0-1.566406-.191406-3.144531-.574219-4.664062l-15.089843-60.375c-.664063-2.625-1.839844-5.03125-3.480469-7.136719l-49.703125-63.902343c-5.417969-6.953126-14.535156-10.160157-23.023438-8.847657-34.863281-48.65625-91.839844-80.457031-156.128906-80.457031-64.28125 0-121.238281 31.785156-156.105469 80.433594-8.488281-1.304688-17.621093 1.917968-23.046875 8.871094l-49.6875 63.886718c-1.65625 2.121094-2.832031 4.519532-3.496094 7.167969l-15.089843 60.359375c-.382813 1.519531-.574219 3.097656-.574219 4.664062v69.234376c0 1.566406.191406 3.144531.574219 4.664062l13.179687 52.71875h-13.753906v48h128v-48h-16v-24.550781c35.921875 36.101562 84.535156 56.550781 136 56.550781 51.519531 0 100.078125-20.414062 136-56.527344v24.527344h-16v48h128v-48h-13.753906l13.179687-52.71875c.382813-1.519531.574219-3.097656.574219-4.664062zm-248-278.617188c97.046875 0 176 78.953125 176 176 0 17.96875-2.703125 35.488281-7.953125 52.320312l-12.460937-41.542968c-1.960938-6.546875-6.265626-11.777344-11.800782-15.058594-2.289062-77.40625-65.824218-139.71875-143.785156-139.71875s-141.496094 62.3125-143.785156 139.71875c-5.535156 3.28125-9.839844 8.511719-11.800782 15.058594l-12.460937 41.542968c-5.25-16.839843-7.953125-34.34375-7.953125-52.320312 0-97.046875 78.953125-176 176-176zm191.351562 214.40625c.167969.671875.121094 1.371094-.136718 2.007812l-11.816406 29.53125c-.207032.519532-.613282.847657-1.03125 1.152344 5.183593-12.96875 8.921874-26.355468 11.136718-40.066406zm-86-9.046875 9.207032 27.632813c-16.679688 33.449218-47.160156 57.609374-82.558594 66.824218v-59.816406c0-30.871094 25.121094-56 56-56h18.128906c-1.359375 3.183594-2.128906 6.679688-2.128906 10.351562v2.671876c0 2.832031.457031 5.640624 1.351562 8.335937zm-211.480468-21.359375h18.128906c30.878906 0 56 25.128906 56 56v59.921875c-35.238281-9.019531-65.328125-32.683594-82.304688-66.257813l-.582031.296876 9.535157-28.601563c.894531-2.695313 1.351562-5.503906 1.351562-8.335937v-2.671876c0-3.671874-.769531-7.167968-2.128906-10.351562zm169.273437-11.488281c-1.769531-13.160157-6.496093-25.609375-13.960937-36.511719h72.328125c3.351562 10.167969 5.390625 20.894531 6.089843 32h-39.601562c-8.742188 0-17.097656 1.648438-24.855469 4.511719zm-178.066406-52.511719c20.824219-42.550781 64.441406-72 114.921875-72s94.097656 29.449219 114.921875 72zm-6.589844 16h72.328125c-7.464844 10.902344-12.191406 23.351562-13.960937 36.511719-7.757813-2.863281-16.113281-4.511719-24.855469-4.511719h-39.59375c.691406-11.105469 2.730469-21.832031 6.082031-32zm73.695313 44.289062c.878906-16.65625 7.59375-32.210937 19.222656-44.289062h57.1875c11.628906 12.070312 18.34375 27.625 19.222656 44.289062-19.175781 12.941407-31.816406 34.878907-31.816406 59.710938v62.921875c-5.273438.671875-10.609375 1.078125-16 1.078125-5.40625 0-10.734375-.382812-16-1.039062v-62.960938c0-24.832031-12.640625-46.769531-31.816406-59.710938zm-141.695313 26.734376c2.222657 13.71875 5.960938 27.105468 11.144531 40.074218-.417968-.296875-.832031-.625-1.039062-1.144531l-11.816406-29.527344c-.257813-.648437-.304688-1.347656-.136719-2.019531zm53.511719 160.976562h-96v-16h96zm-81.742188-32-14.257812-57.382812.097656-70.023438 15.078125-60.328125c.113281-.457031.3125-.867187.601563-1.226563l45.191406-58.109374c-9.074219 17.742187-15.496094 37.046874-18.671875 57.429687-1.152344 1.777344-2.058594 3.695313-2.578125 5.777344l-14.597656 58.398437c-.984375 3.945313-.714844 8.03125.808594 11.824219l11.8125 29.542969c2.9375 7.34375 9.960937 12.097656 17.882812 12.097656 8.566406 0 15.984375-5.511719 18.445312-13.726562l17.671876-58.898438c1.320312-4.414062 5.304687-7.375 9.914062-7.375 5.703125 0 10.34375 4.640625 10.34375 10.351562v2.671876c0 1.121093-.175781 2.214843-.527344 3.273437l-31.472656 94.40625v41.296875zm217.742188 16c-51.640625 0-100.160156-22.449219-133.695312-61.625l12.328124-36.976562c26.328126 41.386718 71.582032 66.601562 121.367188 66.601562 49.335938 0 95.144531-25.640625 121.367188-66.59375l12.320312 36.960938c-33.542969 39.191406-81.992188 61.632812-133.6875 61.632812zm232 16h-96v-16h96zm-80-32v-41.296875l-31.472656-94.40625c-.351563-1.058594-.527344-2.152344-.527344-3.273437v-2.671876c0-5.710937 4.640625-10.351562 10.34375-10.351562 4.609375 0 8.59375 2.960938 9.914062 7.375l17.671876 58.898438c2.460937 8.214843 9.878906 13.726562 18.445312 13.726562 7.921875 0 14.9375-4.753906 17.882812-12.113281l11.820313-29.542969c1.515625-3.785156 1.785156-7.863281.800781-11.816406l-14.597656-58.414063c-.519531-2.074219-1.425781-3.984375-2.578125-5.761719-3.167969-20.375-9.597656-39.679687-18.664063-57.414062l45.191407 58.109375c.273437.34375.472656.761719.585937 1.183594l15.183594 61.152343-.097656 70.023438-14.148438 56.59375zm0 0"></path>
                                <path d="m272 288c0-13.230469-10.769531-24-24-24s-24 10.769531-24 24 10.769531 24 24 24 24-10.769531 24-24zm-32 0c0-4.414062 3.59375-8 8-8s8 3.585938 8 8-3.59375 8-8 8-8-3.585938-8-8zm0 0"></path>
                                <path d="m248 16c19 0 36.871094 7.480469 50.320312 21.054688l11.367188-11.246094c-16.472656-16.640625-38.382812-25.808594-61.6875-25.808594s-45.214844 9.167969-61.679688 25.808594l11.367188 11.246094c13.441406-13.574219 31.3125-21.054688 50.3125-21.054688zm0 0"></path>
                                <path d="m287.289062 48.441406c-10.496093-10.609375-24.449218-16.441406-39.289062-16.441406s-28.792969 5.832031-39.289062 16.441406l11.367187 11.246094c7.464844-7.535156 17.386719-11.6875 27.921875-11.6875s20.457031 4.152344 27.921875 11.6875zm0 0"></path>
                                <path d="m231.113281 71.0625 11.375 11.25c2.953125-2.984375 8.070313-2.984375 11.023438 0l11.375-11.25c-9.007813-9.109375-24.765625-9.109375-33.773438 0zm0 0"></path>
                            </svg>
                            <div class="content-sec">
                                <h5>Check in and Check out</h5>
                                <p>Check in from 02.00pm , Check out until 12.00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="highlight-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 470" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 470 470">
                                <g>
                                    <path d="M235,148.009c40.806,0,74.004-33.198,74.004-74.005C309.004,33.198,275.806,0,235,0s-74.004,33.198-74.004,74.004   C160.996,114.811,194.194,148.009,235,148.009z M235,15c32.535,0,59.004,26.469,59.004,59.004S267.535,133.009,235,133.009   s-59.004-26.47-59.004-59.005S202.465,15,235,15z"></path>
                                    <path d="m235,178.009c59.812,0 108.922,46.69 112.793,105.539h-173.333c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5h181.08c4.142,0 7.5-3.357 7.5-7.5 0-70.601-57.438-128.039-128.04-128.039s-128.04,57.438-128.04,128.039c0,4.143 3.358,7.5 7.5,7.5h30c4.142,0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.254c3.872-58.849 52.983-105.539 112.794-105.539z"></path>
                                    <path d="m140.408,377.712l-41.143-6.905-19.281-36.995c-1.292-2.479-3.855-4.034-6.651-4.034s-5.359,1.555-6.651,4.034l-19.281,36.995-41.143,6.905c-2.757,0.463-5.028,2.42-5.892,5.079-0.864,2.658-0.177,5.577 1.781,7.571l29.227,29.77-6.147,41.263c-0.412,2.766 0.748,5.53 3.01,7.173 2.26,1.644 5.249,1.892 7.751,0.646l37.344-18.597 37.344,18.597c1.058,0.526 2.203,0.786 3.342,0.786 1.557,0 3.104-0.484 4.409-1.433 2.262-1.643 3.422-4.407 3.01-7.173l-6.147-41.263 29.227-29.77c1.958-1.994 2.645-4.913 1.781-7.571-0.862-2.658-3.133-4.615-5.89-5.078zm-38.437,34.577c-1.647,1.678-2.413,4.032-2.066,6.359l4.577,30.723-27.805-13.847c-2.105-1.049-4.581-1.049-6.687,0l-27.806,13.847 4.577-30.723c0.347-2.327-0.418-4.682-2.066-6.359l-21.762-22.166 30.634-5.142c2.32-0.39 4.323-1.845 5.41-3.931l14.356-27.546 14.356,27.546c1.087,2.086 3.09,3.541 5.41,3.931l30.634,5.142-21.762,22.166z"></path>
                                    <path d="m302.075,377.712l-41.143-6.905-19.281-36.995c-1.292-2.479-3.855-4.034-6.651-4.034s-5.359,1.555-6.651,4.034l-19.281,36.995-41.143,6.905c-2.757,0.463-5.028,2.42-5.892,5.079-0.864,2.658-0.177,5.577 1.781,7.571l29.227,29.77-6.146,41.263c-0.412,2.766 0.748,5.53 3.01,7.173 2.26,1.644 5.249,1.892 7.751,0.646l37.344-18.597 37.344,18.597c1.058,0.526 2.203,0.786 3.342,0.786 1.557,0 3.104-0.484 4.409-1.433 2.262-1.643 3.422-4.407 3.01-7.173l-6.146-41.263 29.227-29.77c1.958-1.994 2.645-4.913 1.781-7.571-0.864-2.658-3.135-4.615-5.892-5.078zm-38.437,34.577c-1.647,1.678-2.413,4.032-2.066,6.359l4.576,30.723-27.805-13.847c-1.053-0.524-2.198-0.786-3.343-0.786s-2.291,0.262-3.343,0.786l-27.805,13.847 4.576-30.723c0.347-2.327-0.418-4.682-2.066-6.359l-21.762-22.166 30.634-5.142c2.32-0.39 4.323-1.845 5.41-3.931l14.356-27.545 14.356,27.546c1.087,2.086 3.09,3.541 5.41,3.931l30.634,5.142-21.762,22.165z"></path>
                                    <path d="m469.633,382.791c-0.864-2.659-3.134-4.616-5.892-5.079l-41.143-6.905-19.281-36.995c-1.292-2.479-3.855-4.034-6.651-4.034s-5.359,1.555-6.651,4.034l-19.281,36.995-41.143,6.905c-2.757,0.463-5.028,2.42-5.892,5.079-0.864,2.658-0.177,5.577 1.781,7.571l29.227,29.77-6.147,41.263c-0.412,2.766 0.748,5.53 3.01,7.173 2.26,1.644 5.249,1.892 7.751,0.646l37.344-18.597 37.344,18.597c1.058,0.526 2.203,0.786 3.342,0.786 1.557,0 3.104-0.484 4.409-1.433 2.262-1.643 3.422-4.407 3.01-7.173l-6.147-41.263 29.227-29.77c1.96-1.993 2.647-4.912 1.783-7.57zm-44.328,29.498c-1.647,1.678-2.413,4.032-2.066,6.359l4.577,30.723-27.806-13.847c-1.053-0.524-2.198-0.786-3.343-0.786-1.146,0-2.291,0.262-3.343,0.786l-27.805,13.847 4.577-30.723c0.347-2.327-0.418-4.682-2.066-6.359l-21.762-22.166 30.634-5.142c2.32-0.39 4.323-1.845 5.41-3.931l14.356-27.546 14.356,27.546c1.087,2.086 3.09,3.541 5.41,3.931l30.634,5.142-21.763,22.166z"></path>
                                    <path d="m235,108.009c9.831,0 19.184-4.272 25.66-11.721 2.717-3.126 2.387-7.863-0.739-10.581-3.127-2.718-7.864-2.387-10.581,0.739-3.625,4.171-8.853,6.563-14.34,6.563s-10.714-2.392-14.34-6.563c-2.718-3.126-7.455-3.456-10.581-0.739-3.126,2.718-3.457,7.455-0.739,10.581 6.476,7.448 15.829,11.721 25.66,11.721z"></path>
                                </g>
                            </svg>

                            <div class="content-sec">
                                <h5>Airport transfer service</h5>
                                <p>We can arrange a chauffered service to and from the airport for guests upon request. Additional charges apply. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="highlight-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <polygon points="176.748,182.811 176.748,182.811 176.735,182.783 		"></polygon>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <polygon points="106.342,321.731 106.342,321.744 106.436,321.293 		"></polygon>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <polygon points="209.806,231.019 209.82,230.958 209.907,230.541 		"></polygon>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <polygon points="236.261,386.136 236.274,386.094 236.282,386.068 		"></polygon>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M357.053,208.842c-22.333,0-40.421,18.095-40.421,40.421s18.089,40.421,40.421,40.421
			c22.326,0,40.421-18.095,40.421-40.421C397.474,226.937,379.379,208.842,357.053,208.842z M357.053,269.474
			c-11.143,0-20.211-9.068-20.211-20.211s9.068-20.211,20.211-20.211c11.143,0,20.211,9.068,20.211,20.211
			S368.196,269.474,357.053,269.474z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <g>
                                            <path d="M256,0c-38.589,0-75.102,8.656-107.911,23.956C132.352,9.155,111.051,0,87.58,0C39.289,0,0.001,38.535,0.001,85.895
				c0,17.812,10.907,40.26,24.367,61.238C8.806,180.183,0.001,217.047,0.001,255.999C0.001,397.379,114.601,512,256,512
				s255.999-114.621,255.999-255.999S397.4,0,256,0z M20.212,85.895c0-36.292,30.174-65.684,67.368-65.684
				c37.201,0,67.368,29.393,67.368,65.684c0,36.271-67.368,109.474-67.368,109.474S20.212,122.166,20.212,85.895z M20.21,255.996
				c0.001-31.592,6.3-61.732,17.631-89.293c14.801,20.13,29.527,36.547,34.87,42.348l14.868,16.162l14.868-16.162
				c12.146-13.191,72.71-81.132,72.71-123.156c0-16.855-5.045-32.546-13.628-45.824c16.236-7.135,33.414-12.503,51.301-15.839
				l-5.478,9.849c-2.647,4.796-3.632,9.943-3.658,15.023c0.055,6.393,1.549,12.84,5.524,18.513l-0.013-0.013l15.366,21.585
				c0.842,1.145,1.967,3.509,2.702,6.137c0.754,2.627,1.179,5.558,1.172,7.842c0.007,1.037-0.087,1.947-0.202,2.594l0.007-0.021
				l-3.989,21.733c-0.215,1.449-1.482,4.291-3.354,6.649c-1.819,2.398-4.257,4.331-5.605,4.904l-27.021,12.47
				c-8.643,4.021-13.703,12.564-13.703,21.477c0,3.267,0.694,6.649,2.162,9.836l11.406,24.831c0.593,1.266,1.273,3.469,1.725,5.922
				c0.458,2.453,0.707,5.174,0.707,7.619c0,2.162-0.209,4.136-0.499,5.389l-0.134,0.546l-3.106,13.488
				c-0.33,1.623-1.786,4.675-3.793,7.249c-1.967,2.614-4.541,4.803-6.016,5.544l-19.962,10.591c-1.024,0.58-3.348,1.192-5.807,1.166
				c-2.971,0.047-6.056-0.89-7.209-1.704l-16.33-10.516c-5.423-3.429-11.426-4.709-17.381-4.749
				c-5.48,0.034-11.041,1.131-16.158,4.123l-16.354,9.679c-3.146,1.852-5.801,4.412-7.653,7.485
				c-1.846,3.065-2.857,6.629-2.85,10.206c-0.027,5.376,2.264,10.665,6.09,14.599l-0.013-0.013l9.155,9.552
				c0.829,0.835,2.054,2.768,2.87,5.039c0.829,2.256,1.287,4.837,1.273,6.77c0.007,0.815-0.074,1.529-0.182,2.075l-1.826,8.745
				c-0.404,2.069-1.846,5.706-3.759,8.974c-1.867,3.288-4.299,6.36-5.881,7.747l-8.28,7.424
				c-5.51,4.966-12.632,12.396-17.711,18.384C30.699,335.396,20.21,296.902,20.21,255.996z M189.616,442.408l-10.576,36.413
				c-48.843-16.916-90.464-49.408-118.825-91.581c0.916-1.132,1.899-2.358,2.944-3.638c3.989-4.951,12.214-13.581,17.145-17.981
				l8.273-7.424c3.928-3.557,7.141-7.95,9.903-12.698c2.721-4.769,4.911-9.754,6.03-14.929l1.839-8.839
				c0.41-2.028,0.593-4.069,0.593-6.117c-0.007-4.709-0.922-9.331-2.513-13.716c-1.617-4.372-3.866-8.515-7.249-12.073l-9.155-9.56
				l-0.021-0.013l-0.357-0.485l0.485-0.397l16.364-9.681l0.021-0.007c0.977-0.627,3.354-1.321,5.841-1.294
				c2.695-0.034,5.383,0.788,6.447,1.536l16.317,10.51c5.646,3.564,11.918,4.877,18.155,4.924
				c5.174-0.027,10.381-0.956,15.279-3.517l19.962-10.591c5.079-2.742,9.129-6.656,12.577-11.088
				c3.396-4.48,6.13-9.412,7.458-15.023l3.261-14.174c0.701-3.186,0.977-6.44,0.984-9.782c-0.007-3.759-0.364-7.585-1.051-11.298
				c-0.694-3.719-1.684-7.296-3.227-10.678l-11.419-24.859l-0.013-0.027l-0.289-1.34c0-1.307,0.761-2.6,1.96-3.126l27.029-12.47
				c5.376-2.534,9.599-6.413,13.089-10.867c3.449-4.493,6.151-9.552,7.262-15.394l3.989-21.727l0.007-0.021
				c0.378-2.069,0.525-4.136,0.533-6.198c-0.013-4.507-0.714-9.041-1.96-13.399c-1.266-4.359-3.012-8.529-5.673-12.295
				l-15.36-21.578l-0.007-0.013c-0.843-1.064-1.812-3.961-1.765-6.763c-0.021-2.209,0.552-4.265,1.105-5.194l12.753-22.919
				c6.036-0.485,12.099-0.809,18.244-0.809c117.208,0,214.683,85.975,232.751,198.17l-9.027-5.019
				c-3.739-2.062-7.774-3.409-11.999-4.386c-4.224-0.956-8.569-1.489-12.827-1.495c-2.317,0-4.601,0.155-6.892,0.559l-1.867,0.33
				c-17.055-31.763-50.577-53.422-89.085-53.422c-55.72,0-101.052,45.332-101.052,101.052c0,34.055,33.435,83.28,59.203,116.163
				l-15.421,17.341c-0.922,1.092-3.274,2.802-5.962,3.921c-2.661,1.172-5.659,1.799-7.451,1.772l-0.64-0.021l-29.461-2.27
				l-0.741-0.162l-0.034-0.013v-0.101l0.094-0.606l0.027-0.074l5.255-17.509c0.741-2.486,1.058-4.979,1.058-7.398
				c-0.013-4.796-1.219-9.384-3.354-13.528c-2.143-4.123-5.276-7.882-9.573-10.597l-11.816-7.383
				c-4.049-2.526-8.577-3.679-12.982-3.672c-7.505,0.013-15.017,3.274-19.975,9.822l-35.819,47.758
				c-3.167,4.21-4.703,9.223-4.703,14.114c-0.007,7.12,3.241,14.255,9.418,18.896l13.103,9.822c0.72,0.519,1.765,1.738,2.479,3.335
				c0.741,1.576,1.152,3.469,1.139,4.924C189.852,441.303,189.744,441.951,189.616,442.408z M437.896,256.007
				c0,44.632-80.842,134.73-80.842,134.73s-80.842-90.099-80.842-134.73c0-44.665,36.19-80.843,80.842-80.843
				C401.699,175.164,437.896,211.341,437.896,256.007z M256,491.789c-19.86,0-39.154-2.5-57.593-7.148l10.624-36.615
				c0.72-2.513,1.03-5.026,1.03-7.492c-0.013-4.696-1.077-9.216-2.999-13.393c-1.933-4.157-4.722-8.031-8.711-11.041l-13.097-9.822
				c-0.862-0.64-1.321-1.631-1.327-2.721c0.007-0.735,0.202-1.387,0.654-1.988l35.827-47.764c0.66-0.95,2.224-1.752,3.8-1.731
				c0.909,0,1.684,0.236,2.27,0.599l11.81,7.383c0.694,0.418,1.657,1.408,2.351,2.762c0.701,1.34,1.098,2.971,1.085,4.224
				c0,0.66-0.094,1.2-0.209,1.589l-5.234,17.462c-0.674,2.183-0.99,4.393-0.99,6.534c-0.021,5.2,1.98,10.348,5.571,14.06
				c3.571,3.753,8.596,5.988,13.871,6.373l29.461,2.27c0.735,0.055,1.462,0.081,2.19,0.081c5.416-0.027,10.584-1.347,15.455-3.422
				c4.851-2.115,9.371-4.951,13.063-9.047l13.191-14.848c6.164,7.398,11.136,13.036,13.925,16.141l15.037,16.761l15.037-16.768
				c14.37-16.007,86.016-98.378,86.016-148.224c0-9.822-1.476-19.295-4.102-28.281c0.303-0.007,0.573-0.034,0.896-0.034
				c2.5-0.007,5.557,0.35,8.341,0.984c2.776,0.62,5.308,1.57,6.67,2.345l21.498,11.944c0.242,4.325,0.384,8.664,0.384,13.036
				C491.79,386.013,386.014,491.789,256,491.789z"></path>
                                            <polygon points="94.172,252.312 94.183,252.306 94.185,252.305 			"></polygon>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M89.256,47.151c-18.614,0-33.677,15.07-33.677,33.684c0,18.607,15.064,33.684,33.678,33.684s33.69-15.077,33.69-33.684
			C122.948,62.228,107.87,47.151,89.256,47.151z M89.257,94.308c-7.431,0.007-13.467-6.043-13.467-13.473
			c0-7.43,6.036-13.473,13.467-13.473c7.438,0,13.48,6.043,13.48,13.473C102.738,88.265,96.695,94.308,89.257,94.308z"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="content-sec">
                                <h5>Languages spoken at the hotel</h5>
                                <p>English, German, French, Arabic</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="highlight-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <svg enable-background="new 0 0 511.801 511.801" height="512" viewBox="0 0 511.801 511.801" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path d="m184.671 393.943h142.459c6.13 0 11.584-3.896 13.572-9.694l10.462-30.515c1.499-4.374.791-9.231-1.897-12.993-2.687-3.762-7.052-6.008-11.675-6.008h-163.383c-4.623 0-8.988 2.246-11.675 6.008-2.688 3.762-3.396 8.619-1.897 12.993l10.462 30.515c1.987 5.798 7.442 9.694 13.572 9.694zm152.034-44.229-10.028 29.247h-141.553l-10.028-29.247z"></path>
                                <path d="m56.162 304.431c0 21.565 17.544 39.109 39.11 39.109s39.11-17.544 39.11-39.109-17.544-39.11-39.11-39.11-39.11 17.544-39.11 39.11zm63.238 0c0 13.304-10.824 24.128-24.128 24.128s-24.128-10.824-24.128-24.128c0-13.305 10.824-24.128 24.128-24.128s24.128 10.823 24.128 24.128z"></path>
                                <path d="m455.639 304.431c0-21.565-17.544-39.11-39.11-39.11s-39.11 17.544-39.11 39.11c0 21.565 17.544 39.109 39.11 39.109s39.11-17.544 39.11-39.109zm-63.238 0c0-13.305 10.824-24.128 24.128-24.128s24.128 10.823 24.128 24.128c0 13.304-10.824 24.128-24.128 24.128s-24.128-10.824-24.128-24.128z"></path>
                                <path d="m491.954 239.556h.238c10.758 0 19.51-8.752 19.51-19.51v-16.718c0-10.758-8.752-19.51-19.51-19.51h-46.95l-6.353-12.45c-1.88-3.686-6.394-5.146-10.077-3.268-3.685 1.881-5.148 6.392-3.268 10.077l23.675 46.397h-224.06c-3.726-32.203-31.152-57.292-64.343-57.292-33.186 0-60.608 25.089-64.332 57.292h-33.902l41.291-80.92c5.881-11.526 17.573-18.686 30.512-18.686h243.03c12.94 0 24.631 7.16 30.512 18.686l1.931 3.785c1.88 3.686 6.393 5.149 10.077 3.268 3.685-1.88 5.148-6.392 3.268-10.077l-1.931-3.785c-8.453-16.567-25.258-26.859-43.857-26.859h-35.217l-18.925-39.638c-3.655-7.656-11.499-12.603-19.983-12.603h-96.779c-8.484 0-16.328 4.947-19.983 12.603l-18.925 39.638h-33.217c-18.599 0-35.404 10.292-43.857 26.859l-23.969 46.973h-46.95c-10.758 0-19.51 8.752-19.51 19.51v16.718c0 10.758 8.752 19.51 19.51 19.51h.238c-12.357 10.074-19.848 25.327-19.848 41.743v146.378c0 14.545 11.833 26.378 26.378 26.378h40.916c14.545 0 26.378-11.833 26.378-26.378v-2.403c2.144.382 4.328.59 6.531.59h33.847c4.137 0 7.491-3.354 7.491-7.491s-3.354-7.491-7.491-7.491h-33.847c-6.242 0-12.253-2.627-16.493-7.207l-60.483-65.321c-5.317-5.742-8.246-13.215-8.246-21.041v-36.014c0-15.343 9.06-29.283 23.08-35.515l14.013-6.228h407.653l14.013 6.228c14.02 6.232 23.08 20.172 23.08 35.515v36.014c0 7.826-2.929 15.299-8.246 21.041l-60.483 65.322c-4.24 4.579-10.252 7.206-16.493 7.206h-242.757c-4.137 0-7.491 3.354-7.491 7.491s3.354 7.491 7.491 7.491h242.756c2.203 0 4.386-.208 6.531-.59v2.403c0 14.545 11.833 26.378 26.378 26.378h40.916c14.545 0 26.378-11.833 26.378-26.378v-146.378c.001-16.416-7.49-31.669-19.846-41.743zm-291.907-162.752c1.183-2.477 3.72-4.077 6.464-4.077h96.779c2.744 0 5.282 1.6 6.464 4.076l15.843 33.183h-141.393zm-127.33 337.05c1.811 1.956 3.819 3.695 5.975 5.205v8.619c0 6.284-5.112 11.397-11.397 11.397h-40.917c-6.284 0-11.397-5.112-11.397-11.397v-76.178zm-26.954-189.279h-26.154c-2.497 0-4.528-2.032-4.528-4.529v-16.718c0-2.497 2.031-4.528 4.528-4.528h39.306zm95.295-.001c3.032-7.974 10.734-13.666 19.759-13.666 9.03 0 16.735 5.692 19.769 13.666zm55.123-.004c-3.459-16.343-18.001-28.644-35.364-28.644-17.358 0-31.896 12.301-35.354 28.644h-13.881c3.624-23.917 24.322-42.306 49.235-42.306 24.918 0 45.621 18.389 49.245 42.306zm269.857.005-13.152-25.775h39.306c2.497 0 4.528 2.031 4.528 4.528v16.718c0 2.497-2.031 4.529-4.528 4.529zm30.781 203.102c0 6.284-5.112 11.397-11.397 11.397h-40.916c-6.284 0-11.397-5.112-11.397-11.397v-8.619c2.156-1.51 4.163-3.248 5.974-5.204l57.736-62.354z"></path>
                                <path d="m175.88 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                <path d="m209.617 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                <path d="m243.354 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                <path d="m277.09 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.357 7.5-7.5 7.5z"></path>
                                <path d="m310.827 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                <path d="m344.564 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                            </svg>
                            <div class="content-sec">
                                <h5>Payment options</h5>
                                <p>rica cab has more than 10000 cabs which include luxury cabs too.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- instagram section start -->
    <section class="pt-0">
        <div class="container-fluid ratio_square instgram-slider">
            <div class="row">
                <div class="col p-0">
                    <div class="slide-6 no-arrow ">
                        @for ($i = 0; $i < 6; $i++)
                            <div>
                                <a href="#">
                                    <div class="instagram-box">
                                        <img src="{{asset('assets/Triumph8.jpg')}}" alt=""
                                            class="img-fluid blur-up lazyload bg-img">
                                        <div class="overlay">
                                            <i class="fab fa-instagram"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        @endfor
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->


@endsection