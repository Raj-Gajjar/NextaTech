@extends('website.layouts.app')

@section('title', $blog->title)

@section('content')

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 py-10">

    <!-- Blog Card -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-gradient-to-r from-orange-400 to-pink-400">
        
        <!-- Blog Title -->
        <h1 class="text-4xl font-bold mb-4 text-gray-900">
            {{ $blog->title }}
        </h1>

        <!-- Blog Date -->
        <p class="text-gray-500 mb-6">
            {{ $blog->created_at->format('d M Y') }}
        </p>

        <!-- Blog Image -->
        @if($blog->image)
        <img 
            src="{{ asset('storage/'.$blog->image) }}"
            class="w-full h-20 sm:h-80 md:h-96 object-cover rounded-lg mb-6"
        >
        @endif

        <!-- Blog Description -->
        <p class="text-gray-700 mb-4 text-lg leading-relaxed">
            {{ $blog->description }}
        </p>

        <!-- Blog Content -->
        <div class="text-gray-700 leading-relaxed text-lg space-y-4">
            {!! $blog->content !!}
        </div>

        <!-- Back to Blogs Button -->
        <div class="mt-8">
            <a href="{{ route('website.blogs') }}" 
               class="inline-block px-6 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-green-400 to-teal-400 hover:opacity-90 transition">
               ← Back to Blogs
            </a>
        </div>

    </div>

</div>

@endsection
