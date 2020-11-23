<section class="section-b-space animated-section">
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
            <span class="title-label">Triumph</span>
            <h2>awesome service<span>Service</span></h2>
        </div>
        <div class="row service_section">
            @foreach ($services as $service)
                <div class="col-lg-4 col-6">
                    <div class="service-wrap">
                        <div>
                            <div class="service-icon">
                                <img src="{{$service->image_path}}" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                            <h5>{{(app()->getLocale() == 'en')? $service->title_en : $service->title_ar}}</h5>
                            <p>{{(app()->getLocale() == 'en')? $service->text_en : $service->text_ar}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        
        </div>
    </div>
</section>