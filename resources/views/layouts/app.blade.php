<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Job Axis') }}</title>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background text-foreground antialiased">

    <div class="flex flex-col min-h-screen">
        {{-- ✅ Navigation always visible --}}
        @include('partials.navigation')

        {{-- ✅ Main Content --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- ✅ Chatbot (always included) --}}
        @include('partials.chatbot')
    </div>

    @stack('scripts')
</body>
</html>
