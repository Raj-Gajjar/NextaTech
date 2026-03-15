@extends('website.layouts.app')

@section('title','Home')

@section('content')

<!-- HERO SECTION -->
<section class="text-center mb-20 px-4 sm:px-6 lg:px-10 pt-10">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">
        Professional <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-blue-500">IT Solutions</span>
    </h1>

    <p class="text-gray-600 text-lg sm:text-xl mb-8">
        We build modern, scalable, and responsive web applications for your business.
    </p>

    <div class="flex justify-center space-x-4 flex-wrap">
        <a href="{{ route('website.services') }}" 
           class="px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 text-white rounded-md font-semibold shadow-lg hover:opacity-90 transition">
            Our Services
        </a>
        <a href="{{ route('website.contacts') }}" 
           class="px-6 py-3 border border-purple-500 text-purple-500 rounded-md font-semibold hover:bg-purple-500 hover:text-white transition">
            Contact Us
        </a>
    </div>
</section>



<!-- SERVICES SECTION -->
<section class="mb-20 px-4 sm:px-6 lg:px-10 ">
    <h2 class="text-3xl sm:text-4xl font-bold mb-10 text-center text-gray-900">
        Our Services
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

        @foreach($services as $service)
        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl hover:-translate-y-2 transition transform">
            <h3 class="text-xl font-semibold mb-3 text-gray-800">
                {{ $service->title }}
            </h3>

            <p class="text-gray-600 mb-4">
                {{ $service->description }}
            </p>

            <div>
                @if ($service->status === 1)
                    <span class="inline-block bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Service Available
                    </span>
                @elseif ($service->status === 0)
                    <span class="inline-block bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Service Unavailable
                    </span>
                @endif
            </div>
        </div>
        @endforeach

    </div>
</section>



    <!-- CLIENTS SECTION -->
    <section>
        <h2 class="text-3xl sm:text-4xl font-bold text-center mb-10 text-gray-900">Our Clients</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach($clients as $client)
            <div class="bg-white shadow-md rounded-lg p-6 flex items-center justify-center hover:shadow-xl hover:-translate-y-1 transition transform">
                <img src="{{ asset('storage/'.$client->logo) }}" alt="Client Logo" class="max-h-16 object-contain">
            </div>
            @endforeach
        </div>
    </section>



<!-- BLOGS SECTION -->
<section class="mb-20 px-4 sm:px-6 lg:px-10">
    <h2 class="text-3xl sm:text-4xl font-bold text-center mb-10 text-gray-900">
        Latest Blogs
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        @foreach($blogs as $blog)
        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl hover:-translate-y-1 transition transform">
            
            <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">

            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2 text-gray-800">
                    {{ $blog->title }}
                </h3>

                <a href="/blog/{{ $blog->slug }}" 
                   class="text-purple-500 font-medium hover:text-blue-500 transition">
                   Read More
                </a>
            </div>
        </div>
        @endforeach

    </div>
</section>



 <!-- JOBS -->
<section>
        <h2 class="text-3xl sm:text-4xl font-bold mb-10 text-center text-gray-900">Career Opportunities</h2>
        <div class="space-y-4">
            @foreach($jobs as $index => $job)
            @php
                $gradients = [
                    'from-purple-500 via-pink-500 to-blue-400',
                    'from-orange-400 to-pink-400',
                    'from-green-400 to-teal-400',
                ];
                $gradient = $gradients[$index % count($gradients)];
            @endphp
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col sm:flex-row sm:justify-between sm:items-center hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-{{ $gradient }}">
                <div class="mb-4 sm:mb-0">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $job->title }}</h3>
                    <p class="text-gray-600 mt-1">{{ $job->location }}</p>
                </div>
                <a href="/jobs/{{ $job->id }}" class="px-6 py-3 rounded-md bg-gradient-to-r {{ $gradient }} text-white font-semibold text-center hover:opacity-90 transition whitespace-nowrap">Apply</a>
            </div>
            @endforeach
        </div>
    </section>



@endsection