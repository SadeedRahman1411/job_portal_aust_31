@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Available Jobs</h1>

        <ul class="space-y-4">
            <li class="p-4 border rounded-lg">
                <h2 class="text-xl font-semibold">Software Engineer</h2>
                <p class="text-muted-foreground">Location: Dhaka, Bangladesh</p>
                <p class="text-muted-foreground">Company: Tech Solutions Ltd.</p>
            </li>

            <li class="p-4 border rounded-lg">
                <h2 class="text-xl font-semibold">Frontend Developer</h2>
                <p class="text-muted-foreground">Location: Remote</p>
                <p class="text-muted-foreground">Company: Web Innovators</p>
            </li>

            <li class="p-4 border rounded-lg">
                <h2 class="text-xl font-semibold">Data Analyst</h2>
                <p class="text-muted-foreground">Location: Chattogram, Bangladesh</p>
                <p class="text-muted-foreground">Company: Data Insights BD</p>
            </li>
        </ul>
    </div>
@endsection
