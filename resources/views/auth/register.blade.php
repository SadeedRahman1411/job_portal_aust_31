@extends('layouts.app')

@section('content')

{{-- 🌟 Register Section --}}
<section class="relative w-full min-h-screen flex items-center justify-center bg-gray-100 py-20">

    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/we-are-hiring-digital-collage.jpg') }}" 
             alt="Job Axis Register Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
    </div>

    {{-- Register Card --}}
    <div class="relative z-10 w-full max-w-lg bg-white/90 backdrop-blur-xl rounded-2xl shadow-2xl p-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-800">Create an Account ✨</h2>
            <p class="text-gray-600 mt-2">Join <span class="text-indigo-600 font-semibold">Job Axis</span> and start your journey today!</p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
    <div class="mb-4">
        <div class="font-medium text-red-600">Whoops! Something went wrong.</div>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Name --}}
            <div class="mb-5">
                <x-input-label for="name" :value="__('Full Name')" class="text-gray-700" />
                <x-text-input id="name" 
                              class="block mt-2 w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              type="text" 
                              name="name" 
                              :value="old('name')" 
                              required 
                              autofocus 
                              autocomplete="name" />
            </div>

            {{-- Email --}}
            <div class="mb-5">
                <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                <x-text-input id="email" 
                              class="block mt-2 w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              type="email" 
                              name="email" 
                              :value="old('email')" 
                              required 
                              autocomplete="username" />
            </div>

            {{-- Password --}}
            <div class="mb-5">
                <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                <x-text-input id="password" 
                              class="block mt-2 w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              type="password"
                              name="password"
                              required 
                              autocomplete="new-password" />
            </div>

            {{-- Confirm Password --}}
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700" />
                <x-text-input id="password_confirmation" 
                              class="block mt-2 w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                              type="password"
                              name="password_confirmation"
                              required 
                              autocomplete="new-password" />
            </div>

            {{-- Submit --}}
            <x-primary-button class="w-full py-3 text-lg rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 shadow-lg justify-center">
                {{ __('Sign Up') }}
            </x-primary-button>
        </form>

        {{-- Already have account --}}
        <p class="mt-6 text-center text-gray-600">
            Already have an account? 
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                Log in here
            </a>
        </p>
    </div>
</section>

@endsection
