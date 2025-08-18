@extends('layouts.app') {{-- Assuming you have a main layout with navbar --}}

@section('content')
<div class="min-h-screen flex items-center justify-center bg-background">
    <div class="w-full max-w-md bg-card shadow-lg rounded-xl p-6">
        <!-- Logo & Heading -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-semibold text-foreground">Job Axis</h1>
            <p class="text-muted-foreground mt-2">Create your account</p>
        </div>

        <!-- Toggle Sign In / Sign Up -->
        <div class="flex border rounded-lg overflow-hidden mb-6">
            <a href="{{ route('login') }}"
               class="w-1/2 text-center py-2 {{ request()->routeIs('login') ? 'bg-primary text-primary-foreground' : 'bg-muted text-foreground' }}">
               Sign In
            </a>
            <a href="{{ route('register') }}"
               class="w-1/2 text-center py-2 {{ request()->routeIs('register') ? 'bg-primary text-primary-foreground' : 'bg-muted text-foreground' }}">
               Sign Up
            </a>
        </div>

        <!-- Social Logins -->
        <div class="space-y-3 mb-6">
            <button class="w-full flex items-center justify-center gap-2 py-2 border rounded-lg bg-input-background hover:bg-accent transition">
                <i class="fab fa-google text-red-500"></i>
                Continue with Google
            </button>
            <button class="w-full flex items-center justify-center gap-2 py-2 border rounded-lg bg-input-background hover:bg-accent transition">
                <i class="fab fa-linkedin text-blue-600"></i>
                Continue with LinkedIn
            </button>
        </div>

        <div class="flex items-center mb-6">
            <div class="flex-grow border-t border-muted"></div>
            <span class="px-3 text-sm text-muted-foreground">Or continue with email</span>
            <div class="flex-grow border-t border-muted"></div>
        </div>

        <!-- Signup Form -->
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-foreground">Full Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required
                       class="w-full mt-1 px-3 py-2 border rounded-lg bg-input-background focus:ring focus:ring-ring">
                @error('name')
                    <p class="text-destructive text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-foreground">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                       class="w-full mt-1 px-3 py-2 border rounded-lg bg-input-background focus:ring focus:ring-ring">
                @error('email')
                    <p class="text-destructive text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-foreground">Password</label>
                <input id="password" type="password" name="password" required
                       class="w-full mt-1 px-3 py-2 border rounded-lg bg-input-background focus:ring focus:ring-ring">
                @error('password')
                    <p class="text-destructive text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-foreground">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                       class="w-full mt-1 px-3 py-2 border rounded-lg bg-input-background focus:ring focus:ring-ring">
            </div>

            <!-- Submit -->
            <button type="submit"
                    class="w-full bg-primary text-primary-foreground py-2 rounded-lg font-medium hover:opacity-90 transition">
                Sign Up
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-muted-foreground">
            Already have an account?
            <a href="{{ route('login') }}" class="text-primary font-medium">Sign In</a>
        </p>
    </div>
</div>
@endsection
