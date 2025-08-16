@extends('layouts.app') {{-- if you’re using Laravel Breeze/Jetstream layout --}}

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Get in Touch</h1>
        <p class="text-muted">
            We'd love to hear from you! Fill out the form and we’ll respond as quickly as possible.
        </p>
    </div>

    <!-- Contact Info -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card h-100 text-center p-3 shadow-sm">
                <div class="mb-3"><i class="bi bi-envelope-fill fs-2 text-primary"></i></div>
                <h5>Email Us</h5>
                <p class="text-muted small">support@example.com</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 text-center p-3 shadow-sm">
                <div class="mb-3"><i class="bi bi-telephone-fill fs-2 text-primary"></i></div>
                <h5>Call Us</h5>
                <p class="text-muted small">+1 (555) 123-4567</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 text-center p-3 shadow-sm">
                <div class="mb-3"><i class="bi bi-geo-alt-fill fs-2 text-primary"></i></div>
                <h5>Visit Us</h5>
                <p class="text-muted small">123 Main St, San Francisco, CA</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 text-center p-3 shadow-sm">
                <div class="mb-3"><i class="bi bi-clock-fill fs-2 text-primary"></i></div>
                <h5>Hours</h5>
                <p class="text-muted small">Mon-Fri: 9am - 5pm</p>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="bi bi-send me-2"></i> Send us a Message</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="#">
                {{-- @csrf if you want later --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="you@example.com" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" id="subject" class="form-control" placeholder="What's this about?" required>
                </div>

                <div class="mb-3">
                    <label for="inquiryType" class="form-label">Inquiry Type</label>
                    <select id="inquiryType" class="form-select" required>
                        <option selected disabled>Select type</option>
                        <option value="general">General Inquiry</option>
                        <option value="support">Support</option>
                        <option value="partnership">Partnership</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" rows="5" class="form-control" placeholder="Write your message..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-send me-2"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
