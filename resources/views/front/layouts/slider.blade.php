<section class="home_section hotel_layout slide-1 p-0">
    @foreach ($sliders as $slider)
        <div>
            <div class="home">
                <img src="DSC_5888.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                <div class="home-content">
                    <div>
                        <h1>{{$slider->title1}}</h1>
                        <h5>Triumph hotel</h5>
                        <h2>welcome</h2>
                        <a href="#" class="btn btn-solid ">book now</a>
                </div>
                </div>
            </div>
        </div>    
    @endforeach
    
</section>