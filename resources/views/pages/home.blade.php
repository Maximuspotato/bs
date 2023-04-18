@extends('layout')

@section('content')
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to broadening perspectives and insights</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">A platform where seasoned professionals debate pertinent work-related issues</h1>
                                <!-- Hero-btn -->
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="{{url('/')}}/attendees/register" class="btn hero-btn">Register</a>
                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn"  href="{{(isset($event)>0) ? (!empty($event->link)?$event->link:'https://www.youtube.com/watch?v=IxgzKVqvt5Y'): 'https://www.youtube.com/watch?v=IxgzKVqvt5Y'}}">
                                        <i class="fas fa-play"></i></a>
                                    <p class="video-cap d-none d-sm-blcok" data-animation="fadeInRight" data-delay="1.0s">Story Vidoe<br> Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">Digital Conference For Designers</h1>
                                <!-- Hero-btn -->
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn hero-btn">Download</a>
                                    <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn"  href="https://www.youtube.com/watch?v=up68UAfH0d0">
                                        <i class="fas fa-play"></i></a>
                                    <p class="video-cap d-none d-sm-blcok" data-animation="fadeInRight" data-delay="1.0s">Story Vidoe<br> Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
        <!-- Counter Section Begin -->
        <div class="counter-section d-none d-sm-block">
            <p>Countdown to next event</p>
            <div class="cd-timer" id="" >
                
                <div class="cd-item">
                    @if (isset($event))
                        @php
                            $date = new DateTime($event->date);
                            $now = new DateTime(date('y-m-d h:i:s'));
                            $interval = $date->diff($now);
                            $days = $interval->format('%a')
                        @endphp
                        <span>{{$days}}</span>
                    @else
                        <span>00</span>
                    @endif
                    <p>Days</p>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->
    </div>
    <!-- slider Area End-->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        @if (isset($event))
                            <div class="section-tittle mb-35">
                            <h2>{{$event->title}}</h2>
                        </div>
                        <p>{{$event->description}}</p>
                        @else
                           <div class="section-tittle mb-35">
                            <h2>The Biggest Workplace Debates</h2>
                        </div>
                        <p>A platform where seasoned professionals debate pertinent work-related issues that enable participants to gain broader perspectives and insights that could find useful application in their professional and personal lives</p> 
                        @endif
                        
                    </div>
                    @if (isset($event))
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div>
                                <div class="caption">
                                    <h5>Where</h5>
                                    <p>{{$event->location}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-education"></span>
                                </div>
                                <div class="caption">
                                    <h5>When</h5>
                                    <p>{{date_format($date, 'M/d/Y')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    @endif
                    <a href="#" class="btn mt-50">Register</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/about3.jpg" alt="" width="350">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/gallery/debb1.jpg" alt="" width="500" height="500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <x-events-card :page='$page'/>

    <x-gallery-card/>

    <!--? Brand Area Start-->
    <section class="work-company section-padding30" style="background: #005E6D;">
        <div class="container">
            <img src="assets/img/gallery/partner.png" alt="" height="900" width="100%">
        </div>
    </section>
    <!-- Brand Area End-->

@endsection