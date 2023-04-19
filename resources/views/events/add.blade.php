@extends('layout')

@section('content')
    <section class="about-low-area section-padding2">
        <div class="container">
            {{-- {{$message}} --}}
            <!-- about-img -->
            <div class=" ">
                <h3 class="mb-30">Add an event</h3>
                <form id="my_form" method="POST" action="{{url('/')}}/events" enctype="multipart/form-data">
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
                        <label for="description" class="inline-block text-lg mb-2">
                            Description
                        </label>
                        {{-- <textarea name="description" placeholder="Enter Your Description"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Description'" required
                            class="single-input-primary"></textarea> --}}
                        <div id="fake_textarea" placeholder="Enter Your Description"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Description'" required
                        class="single-input-primary" contenteditable></div>
                        <input type="hidden" id="fake_textarea_content" name="description" required>
                        @error('description')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <label for="link" class="inline-block text-lg mb-2">
                            Video link
                        </label>
                        <input type="text" name="link" placeholder="Enter Your Video Link"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Video Link'"
                            class="single-input-primary" />
                        @error('link')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <label for="location" class="inline-block text-lg mb-2">
                            Location
                        </label>
                        <input type="text" name="location" placeholder="Enter Your Location"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Location'" required
                            class="single-input-primary" />
                        @error('location')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <label for="date" class="inline-block text-lg mb-2">
                            Date
                        </label>
                        <input type="datetime-local" name="date"
                            class="single-input-primary" />
                        @error('date')
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