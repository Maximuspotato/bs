@extends('layout')

@section('content')
    <section class="about-low-area section-padding2">
        <div class="container">
            <!-- about-img -->
            <div class=" ">
                <h3 class="mb-30">Post a blog</h3>
                <form id="my_form" method="POST" action="{{url('/')}}/gallery" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-10">
                        <label for="title" class="inline-block text-lg mb-2">
                            Title
                        </label>
                        <input type="text" name="title" placeholder="Enter Your Title"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Title'" required
                            class="single-input-primary" />
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
                        <div id="fake_textarea" placeholder="Enter Your Content"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Content'" required
                        class="single-input-primary" contenteditable></div>
                        <input type="hidden" id="fake_textarea_content" name="content" required>
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