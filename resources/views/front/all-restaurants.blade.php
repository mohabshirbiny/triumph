@extends('front.layouts.app')

@section('title')
    {{__('app.all_restaurants')}}
@endsection
@section('content')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="{{asset('assets/slider_dining.jpg')}}" class="bg-img img-fluid blur-up lazyload" alt="">
     <!--   <div class="breadcrumb-content">
            <div>
                <h2>Restaurants</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Restaurants</li>
                    </ol>
                </nav>
            </div>
        </div>-->
        <div class="title-breadcrumb">Triumph</div>
    </section>
    <!-- breadcrumb end -->

    

    <!-- section start -->
    <section class="xs-section bg-inner">
        <div class="container-fluid">
            <div class="row ">
                
                <div class="col-lg-12 ratio3_2 grid-box">
                    <div class="container">
                        <!-- add resturants here-->
                        <div class="row">
                            @foreach ($hotel->restaurants() as $restaurant)
                                
                            
                                <div class="col-md-4" style="margin-top: 35px;">
                                    <div class="shadow-item" style=" padding-bottom: 35px;">
                                        <!--image-->
                                        <div style="background-color: rgb(226, 78, 78);"><img src="{{$restaurant->image_path}}" alt="" style="width: 100% ; height: auto;"></div>
                                        <!-- content-->
                                        <div style="margin-top: 25px; text-align: center;">
                                            <h3 style="text-align: center; font-weight: 700; color: #9a8348;">{{$restaurant->title_en}}</h3>
                                            <p style="text-align: center;">{{$restaurant->type}}</p>
                                            <p style="text-align: center; padding-left: 35px; padding-right: 35px;">{{mb_strimwidth($restaurant->description_en, 0, 50,' ...')}}	<br></p>
                                            <a href="{{route('restaurant.details',['id' => $restaurant->id,'hotel_slug'=>$hotel->slug])}}" class="btn btn-solid ">More Information</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>

                        <!-- end of resturants 
                        <nav aria-label="Page navigation example" class="pagination-section">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>-->
                    </div>
                </div>
                <div class="col-lg-5  map-section">
                    <div class="map" id="myMap"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->
@endsection