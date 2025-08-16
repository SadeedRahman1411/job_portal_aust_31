<nav class="bg-white border-b border-gray-200 sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-8 w-8 text-indigo-600" 
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M6 7V4a1 1 0 011-1h10a1 1 0 011 1v3M6 7h12M6 7v13a1 1 0 001 1h10a1 1 0 001-1V7" />
                </svg>
                <span class="text-xl font-semibold text-indigo-600">Job Axis</span>
            </a>

            {{-- Nav Links --}}
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" 
                   class="{{ request()->is('/') ? 'text-indigo-600 font-medium' : 'text-gray-600 hover:text-indigo-600' }}">
                    Home
                </a>
                <a href="{{ route('jobs') }}" 
                   class="{{ request()->is('jobs') ? 'text-indigo-600 font-medium' : 'text-gray-600 hover:text-indigo-600' }}">
                    Jobs
                </a>
                <a href="{{ route('about') }}" 
                   class="{{ request()->is('about') ? 'text-indigo-600 font-medium' : 'text-gray-600 hover:text-indigo-600' }}">
                    About
                </a>
                <a href="{{ route('contact') }}" 
                   class="{{ request()->is('contact') ? 'text-indigo-600 font-medium' : 'text-gray-600 hover:text-indigo-600' }}">
                    Contact
                </a>
            </div>

            {{-- Auth --}}
            <div class="flex items-center space-x-4">
                <a href="{{ route('auth') }}?mode=signin"
                   class="px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100">
                    Sign In
                </a>
                <a href="{{ route('auth') }}?mode=signup"
                   class="px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>
