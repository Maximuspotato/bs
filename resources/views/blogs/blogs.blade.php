@extends('layout')

@section('content')
<x-hero-card :page='$page'/>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_details">
                                <img src="{{$blog->pic ? asset('storage/'.$blog->pic):asset('assets/img/logo/logo.jpg')}}" alt="" width="100%">
                                <h2>{{$blog->title}}</h2>
                                <p>{{$blog->content}}</p>
                            </div>
                        </article>
                    </div>
                    @endforeach
                @else
                    No blogs found
                @endif
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Facebook Feed</h4>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fbothsidesevents%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=596425523875367" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection