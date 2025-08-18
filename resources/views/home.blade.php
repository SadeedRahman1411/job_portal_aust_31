@extends('layouts.app')

@section('content')

{{-- 🌟 Hero Section --}}
<section class="relative w-full min-h-screen flex flex-col items-center justify-center text-center text-white overflow-hidden py-32">

    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/we-are-hiring-digital-collage.jpg') }}" 
             alt="We are hiring" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
    </div>

   {{-- Content --}}
<div class="relative z-10 max-w-6xl px-6">
    {{-- Title --}}
    <h1 class="text-8xl sm:text-9xl md:text-[10rem] font-extrabold tracking-wider uppercase leading-tight drop-shadow-[0_8px_30px_rgba(0,0,0,0.7)]">
        Welcome to <span class="text-yellow-400">Job Axis</span>
    </h1>

    {{-- Subtitle --}}
    <p class="mt-10 text-4xl sm:text-5xl md:text-6xl text-gray-200 font-semibold drop-shadow-[0_4px_20px_rgba(0,0,0,0.6)]">
        Find your <span class="text-indigo-400 font-extrabold">dream job</span> today 🚀
    </p>

    {{-- Search Bar --}}
    <form action="{{ route('jobs.index') }}" method="GET"
          class="mt-16 mx-auto w-full max-w-3xl bg-white/20 backdrop-blur-xl rounded-full shadow-2xl flex items-center overflow-hidden border border-white/30 ring-2 ring-white/40">
        <input type="text" name="search"
               placeholder="🔎 Search for jobs..."
               class="flex-1 px-6 py-5 text-gray-900 text-xl font-medium focus:outline-none bg-transparent placeholder-gray-500" />
        <button type="submit"
                class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-10 py-5 font-bold text-lg hover:scale-105 transition-all shadow-lg">
            Search
        </button>
    </form>
</div>
</section>

        {{-- Quick Categories --}}
        <div class="mt-10 flex flex-wrap justify-center gap-3">
            @foreach(['Frontend','Backend','Remote','Design','Marketing'] as $cat)
                <span class="bg-white/20 px-5 py-2 rounded-full text-sm font-medium hover:bg-white/30 transition">
                    {{ $cat }}
                </span>
            @endforeach
        </div>
    </div>
</section>



{{-- 🚀 Featured Jobs --}}
<section class="py-24 px-6 bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <div class="max-w-7xl mx-auto space-y-14">
        <div class="text-center space-y-3">
            <h2 class="text-5xl font-extrabold text-gray-900">
                🚀 Featured <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Jobs</span>
            </h2>
            <p class="text-gray-600 text-lg">Handpicked opportunities from top companies hiring right now.</p>
        </div>

        {{-- Jobs Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $featuredJobs = [
                    (object)[ 'id'=>1, 'title'=>"Senior Frontend Developer", 'company'=>"TechCorp", 'location'=>"Dhaka, Bangladesh", 'salary'=>"৳80k - ৳120k", 'type'=>"Full-time", 'tags'=>["React","TypeScript","Remote"]],
                    (object)[ 'id'=>2, 'title'=>"Product Manager", 'company'=>"InnovateLabs", 'location'=>"Chittagong, Bangladesh", 'salary'=>"৳90k - ৳140k", 'type'=>"Full-time", 'tags'=>["Strategy","Analytics","Leadership"]],
                    (object)[ 'id'=>3, 'title'=>"UI/UX Designer", 'company'=>"CreativeHive", 'location'=>"Sylhet, Bangladesh", 'salary'=>"৳60k - ৳100k", 'type'=>"Remote", 'tags'=>["Figma","Adobe XD","Design"]],
                    (object)[ 'id'=>4, 'title'=>"Backend Engineer", 'company'=>"CodeSmiths", 'location'=>"Remote", 'salary'=>"৳100k - ৳160k", 'type'=>"Full-time", 'tags'=>["Laravel","Node.js","API"]],
                    (object)[ 'id'=>5, 'title'=>"Digital Marketer", 'company'=>"MarketX", 'location'=>"Dhaka, Bangladesh", 'salary'=>"৳50k - ৳90k", 'type'=>"Part-time", 'tags'=>["SEO","Social Media","Content"]],
                    (object)[ 'id'=>6, 'title'=>"Data Analyst", 'company'=>"DataWiz", 'location'=>"Remote", 'salary'=>"৳70k - ৳110k", 'type'=>"Contract", 'tags'=>["Python","SQL","Analytics"]],
                ];
            @endphp

            @foreach($featuredJobs as $job)
                <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition transform hover:-translate-y-2 hover:scale-[1.02] p-6 space-y-5 border border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-lg font-bold">
                            {{ strtoupper(substr($job->company, 0, 1)) }}
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-gray-900">{{ $job->company }}</h3>
                            <p class="text-sm text-gray-500">📍 {{ $job->location }}</p>
                        </div>
                    </div>

                    <h3 class="text-xl font-extrabold text-gray-800">{{ $job->title }}</h3>

                    <div class="flex items-center gap-3">
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $job->salary }}
                        </span>
                        <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $job->type }}
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        @foreach($job->tags as $tag)
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs rounded-full hover:bg-indigo-100 hover:text-indigo-600 transition">
                                #{{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    <a href="{{ route('jobs.show', $job->id) }}"
                        class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl py-3 font-semibold hover:shadow-lg hover:from-indigo-700 hover:to-purple-700 transition">
                        View Details →
                    </a>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="{{ route('jobs.index') }}"
                class="inline-block border-2 border-indigo-600 text-indigo-600 px-8 py-3 rounded-xl font-semibold hover:bg-indigo-600 hover:text-white hover:shadow-lg transition">
                View All Jobs →
            </a>
        </div>
    </div>
</section>


{{-- 🔥 How It Works --}}
<section class="py-24 px-6 bg-white">
    <div class="max-w-6xl mx-auto space-y-16">
        <div class="text-center">
            <h2 class="text-5xl font-extrabold text-gray-800">How It Works</h2>
            <p class="text-gray-500 mt-3 text-lg">Three simple steps to land your dream job.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div class="p-8 rounded-2xl bg-gradient-to-br from-indigo-50 to-white shadow hover:shadow-xl transition space-y-4">
                <div class="w-16 h-16 mx-auto bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full text-2xl">🔍</div>
                <h3 class="font-bold text-lg">Search Jobs</h3>
                <p class="text-gray-600">Find jobs tailored to your skills.</p>
            </div>
            <div class="p-8 rounded-2xl bg-gradient-to-br from-purple-50 to-white shadow hover:shadow-xl transition space-y-4">
                <div class="w-16 h-16 mx-auto bg-purple-100 text-purple-600 flex items-center justify-center rounded-full text-2xl">📩</div>
                <h3 class="font-bold text-lg">Apply</h3>
                <p class="text-gray-600">Submit applications in just a few clicks.</p>
            </div>
            <div class="p-8 rounded-2xl bg-gradient-to-br from-pink-50 to-white shadow hover:shadow-xl transition space-y-4">
                <div class="w-16 h-16 mx-auto bg-pink-100 text-pink-600 flex items-center justify-center rounded-full text-2xl">🏆</div>
                <h3 class="font-bold text-lg">Get Hired</h3>
                <p class="text-gray-600">Land your dream job quickly and easily.</p>
            </div>
        </div>
    </div>
</section>

@endsection
