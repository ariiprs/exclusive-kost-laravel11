{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Add the Play CDN script to your HTML-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Custom style sheet-->
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <title>Login Screen</title>
</head>
<body>

<section class="bg-gray-50 min-h-screen flex items-center justify-center">
    <!--Login container-->
    <div class="bg-[#7ad3f62a] flex rounded-2xl shadow-lg max-w-3xl p-4">
        <!--Form-->
        <div class="sm:w-1/2 px-16 mt-12">
            <h2 class="font-bold text-2xl text-[#4527a5] text-center">Login</h2>
            <p class="text-sm mt-7 text-[#6c57b1] text-opacity-70 text-center">If you already a member, easily log in</p>

            <!--Data entry group-->
            <form method="POST" class="flex flex-col gap-4" action="{{ route('login') }}">
                @csrf
                <input class="p-2 mt-8 rounded-xl border" type="text" name="email" placeholder="Your email">
                <div class="relative">
                    <input class="p-2 mt-8 rounded-xl border w-full" type="password" name="password" placeholder="Your password">

                    <!--SVG Eye-->
                    <svg class="bi bi-eye-fill absolute top-1/2 right-4
                    translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg>
                </div>

                <button type="submit" class="Login-button rounded-xl text-white py-2">Login</button>
            </form>

            <p class="mt-5 text-xs border-b border-gray-400 py-4">
               <a href="">Forgot Your password?</a>
            </p>

            <div class="mt-3 text-xs flex justify-between items-cente">
                <p>
                    <a href="{{ route('register') }}">If you dont't have an account?</a>
                </p>
                <button class="py-2 px-5 bg-white border rounded-xl hover:bg-gray-500">Sign Up</button>
            </div>
        </div>

        <!--Image-->
        <div class="sm:block hidden w-1/2">
            <img class="sm:block hidden rounded-2xl" src="{{ asset ('assets/images/backgrounds/login2.jpg') }}" alt="img-login">
        </div>
    </div>
<!--===============-->
</section>

</body>
</html>