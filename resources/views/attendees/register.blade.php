@extends('layout')

@section('content')
    <x-hero-card :page='$page' />
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    @if (isset($event))
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>{{$event->title}}</h2>
                        </div>
                        <p>{!!$event->description!!}</p>
                        @if (isset($event->pic))
                            <img src="{{asset('storage/'.$event->pic)}}" width="100%" alt="">
                        @endif
                    </div>
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
                                    @php
                                       $date = new DateTime($event->date);
                                    @endphp
                                    <p>{{date_format($date, 'M/d/Y')}}</p>
                                </div>
                            </div>
                        </div>
                        @if (isset($event->link))
                        <div class="hero__caption">
                            <!-- Hero-btn -->
                            <div class="slider-btns">
                                {{-- <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn hero-btn">Download</a> --}}
                                <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn"  href="{{$event->link}}">
                                    <i class="fas fa-play" style="color: red;
                                    border: solid;
                                    padding: 10px;"> Video link</i></a>
                                <p class="video-cap d-none d-sm-blcok" data-animation="fadeInRight" data-delay="1.0s">Story Vidoe<br> Watch</p>
                            </div>
                        </div>
                        <br>
                        @endif
                    </div>
                    <br>
                    <p>Mpesa till no: <b>9267817</b></p>
                    @else
                    No upcoming event
                    @endif
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class=" ">
                        <h3 class="mb-30">Enter your details</h3>
                        <form method="POST" action="{{url('/')}}/attendees">
                            @csrf
                            <div class="mt-10">
                                <label for="fname" class="inline-block text-lg mb-2">
                                    First Name
                                </label>
                                <input type="text" name="fname" placeholder="Enter Your First Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your First Name'" required
                                    class="single-input-primary" />
                                @error('fname')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <label for="lname" class="inline-block text-lg mb-2">
                                    Last Name
                                </label>
                                <input type="text" name="lname" placeholder="Enter Your Last Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Last Name'" required
                                    class="single-input-primary" />
                                @error('lname')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <label for="number" class="inline-block text-lg mb-2">
                                    Phone Number
                                </label>
                                <input type="text" name="number" placeholder="Enter Your Phone Number"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Phone Number'" required
                                    class="single-input-primary" />
                                @error('number')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <label for="org" class="inline-block text-lg mb-2">
                                    Organization
                                </label>
                                <input type="text" name="org" placeholder="Enter Your Organization"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Organization'" required
                                    class="single-input-primary" />
                                @error('org')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <label for="" class="inline-block text-lg mb-2">
                                    Have you paid for the event? 
                                </label><br>
                                <input type="checkbox" id="paid" class="paid">
                                <label for="paid">Yes</label>
                            </div>
                            <div class="mt-10" id="mpesa">
                                <label for="code" class="inline-block text-lg mb-2">
                                    MPESA Confirmation Code
                                </label>
                                <input type="text" name="code" placeholder="Enter MPESA Confirmation Code you recieved"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter MPESA Confirmation Code you recieved'" 
                                    class="single-input-primary" />
                            </div>
                            <div class="mt-10">
                                <input type="submit" name="code" class="btn header-btn" value="Register" style="background: #005E6D"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection