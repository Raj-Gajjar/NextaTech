@extends('website.layouts.app')

@section('title', $jobs->title)

@section('content')

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 py-10">

    <!-- Job Card -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-gradient-to-r from-green-400 to-teal-400">
        
        <!-- Job Title -->
        <h1 class="text-4xl font-bold mb-4 text-gray-900">
            {{ $jobs->title }}
        </h1>

        <!-- Location -->
        <p class="text-gray-500 mb-6">
            Location: {{ $jobs->location }}
        </p>

        <!-- Job Description -->
        <div class="text-gray-700 mb-8 leading-relaxed space-y-4">
            {!! $jobs->description !!}
        </div>

        <!-- Apply Button -->
        <a href="{{ route('website.job.apply', $jobs->id) }}" 
           class="inline-block px-6 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-orange-400 to-pink-400 hover:opacity-90 transition">
            Apply Now
        </a>

    </div>

</div>

@endsection
