

@extends('front.layouts.app')

@section('title')
    {{(app()->getLocale() == 'en')? $page->title_en : $page->title_ar}}
@endsection
@section('content')
    <section class="breadcrumb-section pt-0">
        <img src="{{$page->cover_path}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
             
        </div>
        <div class="title-breadcrumb">Triumph</div>
    </section>
    <section class="about-section three-image about_page animated-section section-b-space">
        
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
                            <h2 style="color: #9a8348;">{!! (app()->getLocale() == 'en')? $page->title_en : $page->title_ar !!}</h2>
                            <p>{!! (app()->getLocale() == 'en')? $page->content_en : $page->content_ar !!}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection