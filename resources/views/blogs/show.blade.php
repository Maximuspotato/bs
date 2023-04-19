@extends('layout')

@section('content')
    <section class="about-low-area section-padding2">
        <div class="container">
            <!-- about-img -->
            <div class=" ">
                <button class="btn header-btn"><a href="{{url('/')}}/blogs">back</a></button>
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <div class="blog_details">
                            <a href="{{url('/')}}/blogs/{{$blog->id}}"><img src="{{$blog->pic ? asset('storage/'.$blog->pic):asset('assets/img/logo/logo.jpg')}}" alt="" width="100%"></a>
                            <h2>{{$blog->title}}</h2>
                            <span>{!!$blog->content!!}</span>
                        </div>
                    </article>
                    @auth
                        <button style="background: antiquewhite;"><a style="color:black" href="{{url('/')}}/gallery/{{$blog->id}}/edit">Edit</a></button>
                        
                        <form action="{{url('/')}}/gallery/{{$blog->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <br>
                            <button style="background: red; color:white">Delete</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </section>
@endsection