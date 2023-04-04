@extends('layout')

@section('content')
    <section class="about-low-area section-padding2">
        <div class="container">
            <!-- about-img -->
            <div class=" ">
                <h3 class="mb-30">Enter Your Credentials</h3>
                <form method="POST" action="{{url('/')}}/users/authenticate">
                    @csrf
                    <div class="mt-10">
                        <label for="email" class="inline-block text-lg mb-2">
                            Email
                        </label>
                        <input type="text" name="email" placeholder="Enter Your Email"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Email'" required
                            class="single-input-primary" />
                        @error('email')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <label for="password" class="inline-block text-lg mb-2">
                            Password
                        </label>
                        <input type="password" name="password" placeholder="Enter Your Password"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Password'" required
                            class="single-input-primary" />
                        @error('password')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-10">
                        <input type="submit" name="code" class="btn header-btn" value="Login" style="background: #005E6D"/>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection