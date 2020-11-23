<header class="overlay-black">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/triumph-logo.png')}}" alt=""
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
                                        <a href="#" class="nav-link menu-title">{{__('app.Home')}}</a>
                                       <!-- <ul class="nav-submenu menu-content">
                                            <li><a href="#" class="menu-title">Hotel Demo</a>
                                                <ul class="nav-sub-childmenu level1">
                                                    <li><a href="hotel-layout.html">classic</a></li>
                                                    <li><a href="hotel-layout-2.html">minimal</a></li>
                                                    <li><a href="hotel-layout-3.html">vector</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">Tour Demo</a>
                                                <ul class="nav-sub-childmenu level1">
                                                    <li><a href="tour-layout.html">modern</a></li>
                                                    <li><a href="tour-layout-2.html">trending</a></li>
                                                    <li><a href="tour-layout-3.html">Vector demo</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">cab Demo</a>
                                                <ul class="nav-sub-childmenu level1">
                                                    <li><a href="cab-layout.html">modern</a></li>
                                                    <li><a href="cab-layout-2.html">classic</a></li>
                                                    <li><a href="cab-layout-3.html">Map demo</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">flight Demo</a>
                                                <ul class="nav-sub-childmenu level1">
                                                    <li><a href="flight-layout.html">modern</a></li>
                                                    <li><a href="flight-layout-2.html">minimal</a></li>
                                                    <li><a href="flight-layout-3.html">left sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">restaurant Demo</a>
                                                <ul class="nav-sub-childmenu level1">
                                                    <li><a href="restaurant-layout.html">classic</a></li>
                                                    <li><a href="restaurant-layout-2.html">minimal</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">mix Demo</a>
                                                <ul class="nav-sub-childmenu level1">
                                                    <li><a href="mix-layout.html">classic</a></li>
                                                    <li><a href="mix-layout-2.html">minimal</a></li>
                                                </ul>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">{{__('app.Hotel')}}</a>
                                        <ul class="nav-submenu menu-content">
                                            <li><a href="about-us-2.html" class="menu-title">{{__('app.About')}}</a>
                                                
                                            </li>
                                            <li><a href="#" class="menu-title">Rooms & Suits</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="#">Single Room</a></li>
                                                    <li><a href="#">Double Room</a></li>
                                                    <li><a href="#">Triple Room</a></li>
                                                    <li><a href="#">Suit</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">Restaurant, Bars and Club</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="#">Restaurant</a></li>
                                                    <li><a href="#">Bars</a></li>
                                                    <li><a href="#">Club</a></li>
                                                   
                                                </ul>
                                            </li>
                                             <li><a href="#" class="menu-title">Meet & Celebrate</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="#">Meet</a></li>
                                                    <li><a href="#">Celebrate</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">Palace Wellness & Sport</a>
                                                <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="#">Palace Wellness</a></li>
                                                    <li><a href="#">Sport</a></li>
                                                   
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="#" class="menu-title">Shopping</a>
                                               <!-- <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="hotel-booking.html">booking page</a></li>
                                                    <li><a href="hotel-checkout.html">checkout</a></li>
                                                    <li><a href="hotel-booking-failed.html">booking failed</a></li>
                                                    <li><a href="hotel-booking-success.html">booking success</a>
                                                    </li>
                                                </ul>-->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">{{__('app.Media')}}</a>
                                        <ul class="nav-submenu menu-content">
                                            <li><a href="#" class="menu-title">{{__('app.Gallery')}}</a>
                                               <!-- <ul class="nav-sub-childmenu submenu-content level1">
                                                    <li><a href="javascript:void(0)" class="menu-title">grid
                                                            view</a>
                                                        <ul class="nav-sub-childmenu submenu-content level2">
                                                            <li><a href="tour-2-grid.html">2 Grid</a></li>
                                                            <li><a href="tour-3-grid.html">3 Grid</a></li>
                                                            <li><a href="tour-4-grid.html">4 Grid</a></li>
                                                        </ul>-->
                                                    
                                                    
                                            </li>
                                            <li><a href="#" class="menu-title">{{__('app.Videos')}}</a>
                                               
                                            </li>
                                            
                                                
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">{{__('app.Career')}}</a>
                                      
                                    </li>
                                    <li class="dropdown">
                                        <a href="contact-2.html" class="nav-link menu-title">{{__('app.Contact')}}</a>
                                       
                                    </li>
                                   {{-- <li class="dropdown">
                                        <a href="#" class="nav-link menu-title">Book Now</a>
                                       
                                    </li> --}}
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="header-right">
                       <!-- <li class="front-setting">
                            <select>
                                <option value="volvo">EGP</option>
                                <option value="saab">USD</option>
                                <option value="opel">EUR</option>
                            </select>
                        </li>-->
                        <li class="front-setting">
                            <form id="changeLanguage" class="" action="{{url('/locale')}}" method="post">
                                @csrf
                            <select name='locale'>
                                <option onclick="changeLanguage()" @if (app()->getLocale() == 'en') selected @endif value="en">ENG</option>
                                <option  onclick="changeLanguage()" @if (app()->getLocale() == 'ar') selected @endif value="ar">عربي</option>
                               
                            </select>
                        </form>
                        </li>
                        <li class="user user-light">
                            <a href="#">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                        <li class="setting">
                            <a href="#">
                                <i class="fas fa-cog"></i>
                            </a>
                            <ul class="setting-open">
                                <li class="front-setting">
                                    <select>
                                        <option value="volvo">USD</option>
                                        <option value="saab">EUR</option>
                                        <option value="opel">INR</option>
                                        <option value="audi">AUD</option>
                                    </select>
                                </li>
                                <li class="front-setting">
                                    <select>
                                        <option value="volvo">ENG</option>
                                        <option value="saab">FRE</option>
                                        <option value="opel">SPA</option>
                                        <option value="audi">DUT</option>
                                    </select>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>