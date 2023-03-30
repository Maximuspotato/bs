@extends('layout')

@section('content')
    <x-hero-card :page='$page'/>

    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>The Workplace Debates</h2>
                        </div>
                        <p>A platform where seasoned professionals debate pertinent work-related issues that enable participants to gain broader perspectives and insights that could find useful application in their professional and personal lives</p>
                    </div>
                    
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
    <x-gallery-card />
@endsection