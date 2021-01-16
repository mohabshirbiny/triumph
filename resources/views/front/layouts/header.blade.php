<header class="overlay-black">
    <div class="container">
        <div class="row"></div>
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="{{route('index',$hotel->slug)}}">
                            <img src="{{$hotel->logo_path}}" alt="" style="max-width: 250px;"
                                class="img-fluid blur-up lazyload">
                        </a>
                    </div>
                    <nav>
                        <div class="main-navbar">
                            <div id="mainnav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <div class="menu-overlay"></div>
                                <ul class="nav-menu">
                                    <li class="back-btn">
                                        <div class="mobile-back text-right">
                                            <span>Back</span>
                                            <i aria-hidden="true" class="fa fa-angle-right pl-2"></i>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('index',$hotel->slug)}}" class="nav-link menu-title">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('index',$hotel->slug)}}" class="nav-link menu-title">hotel</a>
                                        <ul class="nav-submenu menu-content">
                                            <li><a href="{{route('hotel.about',$hotel->slug)}}" class="menu-title">About</a></li>
                                            
                                            <!-- <li><a href="about.html" class="menu-title">About 2</a></li> -->
                                            

                                            <li><a href="#" class="menu-title">Media</a> 
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="{{route('hotel.gallery',$hotel->slug)}}" class="menu-title">Gallery</a>
                                                       
                                                    </li>
                                                    <!-- <li><a href="#" class="menu-title">Videos</a> -->
                                                       
                                                    </li>
                                                    <!-- <li><a href="#" class="menu-title">Press</a> -->
                                                        
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">Rooms & Suits</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    @foreach ($hotel->rooms() as $room)
                                                    <li><a href="{{route('room_detatils',$room->id)}}">{{$room->title_en}}</a></li>    
                                                    @endforeach
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="{{route('restaurants.all',$hotel->slug)}}" class="menu-title">Restaurants</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    @foreach ($hotel->restaurants() as $restaurant)
                                                        <li><a href="{{route('restaurant.details',['id' => $restaurant->id,'hotel_slug' => $hotel->slug])}}">{{$restaurant->title_en}}</a></li>    
                                                    @endforeach
                                                    
                                                   
                                                </ul>
                                            </li>
                                             <li><a href="#" class="menu-title">Meet & Celebrate</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="{{route('meet_rooms',$hotel->slug)}}">Meet</a></li>
                                                    <li><a href="{{route('hotel.viewPage',['page' => 'celebrate','hotel_slug' => $hotel->slug])}}">Celebrate</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">Fitness & Wellbeing</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="{{route('hotel.viewPage',['page' => 'gym','hotel_slug' => $hotel->slug])}}">Gym</a></li>
                                                    <li><a href="{{route('hotel.viewPage',['page' => 'spa','hotel_slug' => $hotel->slug])}}">Spa</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                            {{-- <li><a href="shopping.html" class="menu-title">Shopping</a> --}}
                                               <!-- <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="hotel-booking.html">booking page</a></li>
                                                    <li><a href="hotel-checkout.html">checkout</a></li>
                                                    <li><a href="hotel-booking-failed.html">booking failed</a></li>
                                                    <li><a href="hotel-booking-success.html">booking success</a>
                                                    </li>
                                                </ul>-->
                                            </li>
                                            <li><a href="{{route('hotel.viewPage',['page' => 'careers','hotel_slug' => $hotel->slug])}}" class="menu-title">Careers</a></li>
                                            <li><a href="{{route('hotel.contact_us',$hotel->slug)}}" class="menu-title">Contact</a></li>
                                        </ul>
                                    </li>
                                    
                                    
                                    <li class="dropdown" >
                                        <a target="_blank" href="{{$hotel->contact_details['location_url']}}" class="nav-link menu-title">
                                            <i class="fas fa-map-marker-alt"></i> Location
                                        </a>
                                       
                                    </li>
                                    <li class="dropdown" >
                                        <a href="tel:{{$hotel->contact_details['phone']}}" class="nav-link menu-title">
                                            <i class="fas fa-phone-alt"></i> {{$hotel->contact_details['phone']}}
                                        </a>
                                       
                                    </li>
                                   
                                    <li class="dropdown" style="background: #9a8348;">
                                        <a href="{{$hotel->booking_url}}" class="nav-link menu-title">Book Now</a>
                                       
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="header-right">
                       
                        <li class="front-setting">
                            <!-- <form id="changeLanguage" class="" action="{{url('/locale')}}" method="post">
                                @csrf
                                <select name='locale'>
                                    <option onclick="changeLanguage()" @if (app()->getLocale() == 'en') selected @endif value="en">ENG</option>
                                    <option  onclick="changeLanguage()" @if (app()->getLocale() == 'ar') selected @endif value="ar">عربي</option>
                                
                                </select>
                            </form> -->
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>