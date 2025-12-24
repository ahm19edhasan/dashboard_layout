
<x-front-layout title="Register">
    <!-- Page Title -->
    <section class="page-title style-two" style="background-image: url({{ asset('dashboard_assets/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="content-box centred mr-0">
                <div class="title">
                    <h1>Sign up</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>Sign up</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- signup-section -->
    <section class="login-section signup-section bg-color-2">
        <div class="auto-container">
            <div class="inner-container">
                <div class="inner-box">
                    <h2>Sign up</h2>

                    <form action="{{ route('register') }}" method="post" class="signup-form">
                        @csrf
                        <input type="hidden" name="type" value="user">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="@error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                            @error('first_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="@error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
                            @error('last_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" class="@error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <div style="border: 1px solid #e6e8e8 !important; border-radius: 30px !important; display: block !important; height: 48px;">
                                <select name="user_type">
                                    <option value="advertiser">Advertiser</option>
                                    <option value="publisher">Publisher</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"  class="@error('password') is-invalid @enderror">
                            @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation">
                        </div>
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn-one">Sign up</button>
                        </div>
                    </form>
                    <div class="othre-text centred">
                        <p>
                            Already have an account?
                            <a href="{{ route('login') }}">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup-section end -->
</x-front-layout>
