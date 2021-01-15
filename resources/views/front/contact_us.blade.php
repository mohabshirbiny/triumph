@extends('front.layouts.app')

@section('title')
    Contact Us 
@endsection
@section('content')
<!-- breadcrumb start -->
<section class="breadcrumb-section pt-0">
    <img src="{{$hotel->pages()->where('key','contact')->first()->cover_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
    <div class="breadcrumb-content">
        <div>
            <h2>{!!$hotel->pages()->where('key','contact')->first()->title_en!!}</h2>
            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                <ol class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                    {{-- <li class="breadcrumb-item active" aria-current="page">contact us</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <div class="title-breadcrumb">Rica</div>
</section>
<!-- breadcrumb end -->


<!-- contact detail section start -->
<section class="contact_section small-section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Address</h4>
                    </div>
                    <div class="contact_content">
                        <p>{{ $hotel->contact_details['address'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-envelope"></i>
                        <h4>email address</h4>
                    </div>
                    <div class="contact_content">
                        <ul>
                            <li>{{ $hotel->contact_details['email'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-phone-alt"></i>
                        <h4>phone</h4>
                    </div>
                    <div class="contact_content">
                        <ul>
                            <li>{{ $hotel->contact_details['phone'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-fax"></i>
                        <h4>fax</h4>
                    </div>
                    <div class="contact_content">
                        <ul>
                           <li>{{ $hotel->contact_details['fax'] }}</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact detail section end -->


<!-- contact detail section start -->
<section class="contact_section small-section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-address-book"></i>
                        <h4>Book</h4>
                    </div>
                    <div class="contact_content">
                        <p>To book your luxurious stay with us, please call us at +202 26729900</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-handshake"></i>
                        <h4>Meetings</h4>
                    </div>
                    <div class="contact_content">
                        <ul>
                            <li>For corporate meetings & events, please call: +202 26729900 or +202 01006015745</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-users"></i>
                        <h4>Weddings</h4>
                    </div>
                    <div class="contact_content">
                        <ul>
                            <li>For banquets & weddings, please call: : +202 26729900</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="contact_wrap">
                    <div class="title_bar">
                        <i class="fas fa-bullhorn"></i>
                        <h4>Promotions</h4>
                    </div>
                    <div class="contact_content">
                        <ul>
                           <li>To learn about our special offers & promotions, please call: +202 26729900</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact detail section end -->


<!-- get in touch section start -->
<section class="small-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="get-in-touch">
                    <h3>get in touch</h3>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="first name"
                                    required="">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="last-name" placeholder="last name"
                                    required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="review" placeholder="phone number"
                                    required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="email" placeholder="email address"
                                    required="">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" placeholder="Write Your Message"
                                    id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12 submit-btn">
                                <button class="btn btn-solid" type="submit">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-map">
                    <iframe
                        src="{{ $hotel->contact_details['location_url_map'] }}"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get in touch section end -->

@endsection