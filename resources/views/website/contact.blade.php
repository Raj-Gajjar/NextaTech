@extends('website.layouts.app')

@section('title','Contact')

@section('content')

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-10 py-10 pb-0">

    <!-- Contact Card -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-gradient-to-r from-red-400 to-yellow-400">
        
        <!-- Page Title -->
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-900">
            Contact Us
        </h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <form action="{{ route('website.contact.submit') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <input type="text" name="name" placeholder="Your Name" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-red-400">
                @error('name') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="email" name="email" placeholder="Your Email" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-red-400">
                @error('email') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="text" name="phone" placeholder="Phone Number" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-red-400">
                @error('phone') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="text" name="subject" placeholder="Subject" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-red-400">
                @error('subject') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <textarea name="message" placeholder="Your Message" rows="5" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-red-400"></textarea>
                @error('message') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="w-full px-6 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-orange-400 to-pink-400 hover:opacity-90 transition">
                Send Message
            </button>

        </form>

    </div>

</div>

@endsection
