<footer>
    <div class="footer section-b-space section-t-space">
        <div class="container">
            <div class="row order-row">
                <div class="col-xl-2 col-md-6 order-cls">
                    <div class="footer-title mobile-title">
                        <h5>contact us</h5>
                    </div>
                    <div class="footer-content">
                        <div class="contact-detail">
                            <div class="footer-logo">
                                <img src="{{$hotel->logo_path}}" alt=""
                                    class="img-fluid blur-up lazyload">
                            </div>
                            <p>Stay in the heart of Cairo.</p>
                            <ul class="contact-list">
                                <li>{{$hotel->about_en}}</li>
                                <!-- <li><i class="fas fa-phone-alt"></i> +2 24042646</li> -->
                                <!-- <li><i class="fas fa-envelope"></i> Info@Triumphhotels.com</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5>Hotel</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="about-us-2.html">about us</a></li>
                                    <li><a href="gallery.html">Media</a></li>
                                    <li><a href="shopping.html">Facilities</a></li>
                                    <li><a href="classic_room.html">Rooms & Suits</a></li>
                                    <li><a href="https://reservations.travelclick.com/112891?languageid=1">Book Now</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-title">
                        <h5>our location</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-map">
                            <iframe
                                src="{{$hotel->contact_details['location_url_map']}}"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                    <div class="footer-title">
                        <h5>new topics</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-blog">
                            <div class="media">
                                <div class="img-part">
                                    <img src="{{asset('assets/thumb04.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="media-body">
                                    <h5>recent news</h5>
                                    <p>Enjoy complimentary WiFi Internet and never worry about hungry tummies as you have access to 24-hour room service. </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="img-part">
                                    <img src="{{asset('assets/thumb06.jpg')}}"
                                            class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="media-body">
                                    <h5>recent news</h5>
                                    <p>Make time for a well-deserved night off by taking advantage of pre-booking our in-room babysitting service for an additional charge. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 ">
                    <div class="footer-title">
                        <h5>Social Media</h5>
                    </div>
                    <div class="footer-content">
                        <div class="contact-detail">
                            <!-- <div class="footer-logo">
                                <img src="triumph-logo.png" alt=""
                                    class="img-fluid blur-up lazyload">
                            </div> -->
                            
                            
                            <ul class="contact-list">
                                <li> <i class="fas fa-map-marker-alt"></i><a href="{{$hotel->contact_details['location_url']}}" style="color: #9a8348;"> Location</a> </li>
                                 <li> <i class="fas fa-phone-alt"></i><a href="tel:+224042646" style="color: #9a8348;"> {{$hotel->contact_details['phone']}}  </a></li>
                                <li> <i class="fas fa-envelope"></i><a href="mailto:{{$hotel->contact_details['email']}}" style="color: #9a8348;"> E-mail </a></li>
                                
                            </ul>
                            <br>
                            <div class="footer-social">
                                <ul>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="{{$hotel->social_media['facebook']}}"><i class="fab fa-facebook-f" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="{{$hotel->social_media['instagram']}}"><i class="fab fa-instagram" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="{{$hotel->social_media['twitter']}}"><i class="fab fa-twitter" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="{{$hotel->social_media['youtube']}}"><i class="fab fa-youtube" style="color: #9a8348;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-social">
                        <!-- <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="copy-right">
                        <p>copyright {{date("Y")}} Triumph Hotels</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>