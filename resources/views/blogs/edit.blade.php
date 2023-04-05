@extends('layout')

@section('content')
    <section class="about-low-area section-padding2">
        <div class="container">
            <!-- about-img -->
            <div class=" ">
                <h3 class="mb-30">Edit blog</h3>
                <form method="POST" action="{{url('/')}}/blogs/{{$blog->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <label for="title" class="inline-block text-lg mb-2">
                            Title
                        </label>
                        <input type="text" name="title" placeholder="Enter Your Title"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Title'" required
                            class="single-input-primary" value="{{$blog->title}}" />
                        @error('title')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <label for="pic" class="inline-block text-lg mb-2">
                            Image
                        </label>
                        <input type="file" name="pic" 
                            class="single-input-primary" />
                        @error('pic')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <label for="content" class="inline-block text-lg mb-2">
                            Content
                        </label>
                        <textarea name="content" placeholder="Enter Your Content"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Content'" required
                            class="single-input-primary">{{$blog->content}}</textarea>
                        @error('content')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <input type="submit" name="code" class="btn header-btn" value="Post" style="background: #005E6D"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection