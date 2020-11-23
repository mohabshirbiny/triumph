<section class="home_section hotel_layout slide-1 p-0">
    @foreach ($sliders as $slider)
        <div>
            <div class="home">
            <img src="{{$slider->image_path}}" class="img-fluid blur-up lazyload bg-img" alt="">
                <div class="home-content">
                    <div>
                        @php
                            $c = 'title1_'.app()->getLocale();
                        @endphp
                        <h1>{{(app()->getLocale() == 'en')? $slider->title1_en : $slider->title1_ar}}</h1>
                        <h5>{{(app()->getLocale() == 'en')? $slider->title2_en : $slider->title2_ar}}</h5>
                        <h2>{{(app()->getLocale() == 'en')? $slider->title3_en : $slider->title3_ar}}</h2>
                        <a href="{{$slider->btn_link}}" class="btn btn-solid ">{{(app()->getLocale() == 'en')? $slider->btn_text_en : $slider->btn_text_ar}}</a>
                </div>
                </div>
            </div>
        </div>    
    @endforeach
    
</section>