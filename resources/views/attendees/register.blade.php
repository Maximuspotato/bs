@extends('layout')

@section('content')
    <x-hero-card :page='$page' />
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Upcoming event</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nisi, commodo eleifend libero at, bibendum varius elit. Vestibulum sed malesuada nulla. Quisque quis odio elit. Duis dictum dapibus vestibulum</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-communications-1"></span>
                                </div>
                                <div class="caption">
                                    <h5>Where</h5>
                                    <p>Nairobi, Kenya</p>
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
                                    <p>Apr. 14. 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
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