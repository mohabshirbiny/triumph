@extends('front.layouts.app')

@section('title')
    {{__('app.meet-rooms')}}
@endsection

@section('css')
<style>


    .hide-content{overflow-y: hidden; height: 447px;}
    .shadow-item{-webkit-box-shadow: 1px 1px 6px 0px rgba(50, 50, 50, 0.39);
                 -moz-box-shadow:    1px 1px 6px 0px rgba(50, 50, 50, 0.39);
                 box-shadow:         1px 1px 6px 0px rgba(50, 50, 50, 0.39);}

    .txt p{
        font-size: medium;
        color: #000;
    }

    .ul-default{
       padding-left: 15px;
    }
    
    .ul-default > li{
    display: list-item; 
    padding: 5px;
    list-style-type: square !important;
    }


    
    @media screen and (max-width: 769px) {
        .hide-content{overflow-y: visible; height: auto;}
    }
    
    </style>
@endsection
@section('content')
<section class="breadcrumb-section pt-0">
    <img src="{{$pageData->cover_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
  <!--  <div class="breadcrumb-content">
        <div>
              <h2>Meet</h2>
            <nav aria-label="breadcrumb" class="theme-breadcrumb">
             <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Meet</li>
                </ol>
            </nav>
        </div>
    </div>-->
    <div class="title-breadcrumb">Triumph</div>
</section>
<!-- breadcrumb end -->




<section class="about-section three-image about_page animated-section section-b-space">
   <!-- <div class="animation-section">
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
    </div>-->
    <div class="container">
        <!-- <div class="title-1">
            <span class="title-label">Triumph</span>
            <h2>Careers</h2>
        </div> -->
        <div class="row">
            <div class="col-xl-9">
                <div class="about-text pl-0">
                    <div>
                        <!-- <div class="title-3">
                            <span class="title-label">Join us </span>
                        </div> -->
                      <!--  <h5><span>multipurpose theme</span></h5> -->
                        <h2 style="color: #9a8348;">{!! $pageData->title_en !!}</h2><br>
                        <p>{!! $pageData->content_en !!}</p>
                        
                    </div>
                </div>
            </div>
        </div>

        @foreach ($hotel->meet_rooms() as $meet_room)
            
        
            <!-- card 1-->
            <div class="row" style="margin-top: 25px;">

                <div class="col-md-10 shadow-item txt" style="background-color: #fff;">
                    <!-- content here -->
                    <div class="row hide-content" style="padding: 25px; ">
                        <!-- left content-->
                        <div class="col-md-6 order-2 order-md-1" style="height: 397px; overflow-y: hidden; padding-top: 15px; padding-bottom: 15px;">
                            
                            <div style="display: flex;  flex-direction: column; justify-content: space-between; height: 100%;">

                                <div>
                                    <!-- header-->
                                    <div  style="display: flex; justify-content: space-between;  align-items: center;">
                                        <h3 style="color: #9a8348;">{!! $meet_room->title_en !!}</h3>
                                        <button class="btn btn-solid color1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">seating style</button>
                                    </div>

                                    <div class="collapse" id="collapseExample" style="margin-top: 15px;">
                                        <div style="background-color: #fff; height: auto; width: 100%;">
                                            <img src="{{ $meet_room->seat_image_path }}" alt="" style="height: auto; width: 100%;">
                                        </div>
                                    </div>

                                    <!--content-->
                                    <div style="margin-top: 15px;">
                                        <p>{!! $meet_room->about_en !!}</p>
                                         
                                    </div>
                                    <!--end content-->

                                </div>

                                <!--footer-->
                                <div style="display: flex; justify-content: space-between;">
                                    <div> 
                                        <button class="btn btn-solid color1" type="button" onclick="collapseInfoBox1();" toggle="off">Amenities</button>
                                        <button class="btn btn-solid color1" type="button" onclick="collapseTxtBox1();" toggle="off">Description</button>
                                    </div>
                                <a href="mailto:{{ $meet_room->inquire_mail }}" class="btn btn-solid">Inquire</a>
                                
                                </div>

                            </div>
                            
                            
                            
                                

                            
                        </div>

                        
                        <!-- right image container -->
                        <div class="col-md-6 order-1 order-md-2" style="height: 100%; padding-top: 15px; padding-bottom: 15px;">
                            <img style="width:100%; height: 100%; object-fit: cover;" src="{{ $meet_room->image_path }}" alt="">
                        </div>

                    </div>

                    <div class="row" id="collapseExample2" style="background-color:#f1f1f1; padding-top: 25px; padding-bottom: 25px; padding-left: 20px; padding-right: 20px;">
                        <div class="col-md-4" >
                            <ul class="ul-default">
                                @foreach ($meet_room->facilities as $facility)
                                    <li class="icon-checkmarkCircle">{{$facility->name_en}}</li>
                                @endforeach
                                
                                
                            </ul>                    
                        </div>
                        
                    </div>

                    <div class="row" id="collapseExample3" style="background-color:#f1f1f1; padding-top: 25px; padding-bottom: 25px; padding-left: 20px; padding-right: 20px;">
                        <div class="col-md-12" >
                            <p>{!! $meet_room->description_en !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
          
        
    </div>
</section>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script>
    
    document.getElementById('collapseExample3').style.display='none';
    document.getElementById('collapseExample2').style.display='none';
     
        
        
        function collapseInfoBox1(){
            document.getElementById('collapseExample3').style.display='none';
            targetWin = document.getElementById('collapseExample2');
            if(targetWin.style.display =='none')
            {
                targetWin.style.display='flex';
            }
            else{
                targetWin.style.display='none';
            }
            
        }
        
        function collapseTxtBox1(){
            document.getElementById('collapseExample2').style.display='none';
            targetWin = document.getElementById('collapseExample3');
            if(targetWin.style.display =='none')
            {
                targetWin.style.display='flex';
            }
            else{
                targetWin.style.display='none';
            }
        }
    
        
        
        
        </script>
@endsection