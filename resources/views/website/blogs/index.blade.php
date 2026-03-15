@extends('website.layouts.app')

@section('title','Blogs')

@section('content')

<h1 class="text-3xl sm:text-4xl font-bold mb-10 text-center text-gray-900">
    Latest Blogs
</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($blogs as $index => $blog)
    @php
        $gradients = [
            'from-purple-500 to-blue-500',
            'from-orange-400 to-pink-400',
            'from-green-400 to-teal-400',
            'from-red-400 to-yellow-400'
        ];
        $gradient = $gradients[$index % count($gradients)];
    @endphp
    <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-{{ $gradient }}">
        <img src="{{ asset('storage/'.$blog->image) }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">
                {{ $blog->title }}
            </h2>
            <a href="{{ route('website.blog.show', $blog->slug) }}" 
               class="inline-block px-4 py-2 rounded-md bg-gradient-to-r {{ $gradient }} text-white font-medium hover:opacity-90 transition">
               Read More →
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection
