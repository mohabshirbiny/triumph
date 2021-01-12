<footer>
    <div class="footer section-b-space section-t-space">
        <div class="container">
            <div class="row order-row">
                <div class="col-xl-2 col-md-6 ">
                    <div class="footer-title">
                        <h5>Triumph Luxury</h5>
                    </div>
                    <div class="footer-content">
                        <div class="contact-detail">
                            <!-- <div class="footer-logo">
                                <img src="triumph-logo.png" alt=""
                                    class="img-fluid blur-up lazyload">
                            </div> -->
                            
                            
                            <ul class="contact-list">
                                <li> <i class="fas fa-map-marker-alt"></i><a href="https://goo.gl/maps/X7Aks8J3t4ML5xRX9" style="color: #9a8348;"> Location </a></li></a>
                                 <li> <i class="fas fa-phone-alt"></i><a href="tel:+26729900" style="color: #9a8348;"> (+2) 26729900 </a></li></a>
                                <li> <i class="fas fa-envelope"></i><a href="mailto:Info@Triumphhotels.com" style="color: #9a8348;"> E-mail </a></li></a>
                                
                            </ul>
                            <br>
                            <div class="footer-social">
                                <ul>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://www.facebook.com/Triumphluxuryhotel"><i class="fab fa-facebook-f" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://www.instagram.com/triumphluxuryhotel/"><i class="fab fa-instagram" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://twitter.com/Triumphhotels1"><i class="fab fa-twitter" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://www.youtube.com/channel/UCIbyZpzpuRe2E8bxdAojUcA/channels"><i class="fab fa-youtube" style="color: #9a8348;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-2 col-md-3">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5 style="color: #1b1b1b;">.</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
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
                
                
                <div class="col-xl-3 col-md-6" style="margin-right: 30px;">
                    <div class="footer-title">
                        <h5>Gallery</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-place ">
                            <div class="row zoom-gallery">
                                @foreach ($appSettingsData['footer_images'] as $footer_images)
                                    <div class="col-4 grid-item">
                                        <div class="place">
                                            <a href="{{ url('images/footer_image_files/'.$footer_images )}}">
                                                <img src="{{ url('images/footer_image_files/'.$footer_images )}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                {{-- <div class="overlay">
                                                    <h6>Triumph</h6>
                                                </div> --}}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-2 col-md-6 ">
                    <div class="footer-title">
                        <h5>Triumph Plaza</h5>
                    </div>
                    <div class="footer-content">
                        <div class="contact-detail">
                            <!-- <div class="footer-logo">
                                <img src="triumph-logo.png" alt=""
                                    class="img-fluid blur-up lazyload">
                            </div> -->
                            
                            
                            <ul class="contact-list">
                                <li> <i class="fas fa-map-marker-alt"></i><a href="https://goo.gl/maps/xnNoexWLWQ97A8E98" style="color: #9a8348;"> Location </a></li></a>
                                 <li> <i class="fas fa-phone-alt"></i><a href="tel:+224042646" style="color: #9a8348;"> (+2) 24042646 </a></li></a>
                                <li> <i class="fas fa-envelope"></i><a href="mailto:Info@Triumphhotels.com" style="color: #9a8348;"> E-mail </a></li></a>
                                
                            </ul>
                            <br>
                            <div class="footer-social">
                                <ul>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://www.facebook.com/triumphplazahotel"><i class="fab fa-facebook-f" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://www.instagram.com/triumphplazahotel/"><i class="fab fa-instagram" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://twitter.com/Triumphhotels1"><i class="fab fa-twitter" style="color: #9a8348;"></i></a></li>
                                    <li style="margin-right: 11px;font-size: 25px;" ><a href="https://www.youtube.com/channel/UCnL67YmuPX7LtVNDWCtiB6g?view_as=subscriber"><i class="fab fa-youtube" style="color: #9a8348;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-2 col-md-3">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5 style="color: #1b1b1b;">.</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
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
                        <p>copyright 2021 Triumph Hotels</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>