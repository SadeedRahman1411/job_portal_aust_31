@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Forgot Password</h2>

        <p class="text-sm text-gray-600 mb-4">
            Enter your email address and we’ll send you a link to reset your password.
        </p>

        <form method="POST" action="#">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input id="email" type="email" name="email" required
                       class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500 border-gray-300">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                Send Reset Link
            </button>
        </form>
    </div>
</div>
@endsection
