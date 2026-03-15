@extends('website.layouts.app')

@section('title', 'Apply for ' . $jobApplication->title)

@section('content')

<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-10 py-10 pb-0">

    <!-- Application Card -->
    <div class="bg-white shadow-md rounded-lg p-8 hover:shadow-xl hover:-translate-y-1 transition transform border-t-4 border-transparent hover:border-t-4 hover:border-gradient-to-r from-purple-500 to-blue-500">

        <!-- Page Title -->
        <h2 class="text-3xl font-bold mb-6 text-gray-900">
            Apply for {{ $jobApplication->title }}
        </h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Application Form -->
        <form action="{{ route('job-applications.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="job_id" value="{{ $jobApplication->id }}">

            <div>
                <input type="text" name="name" placeholder="Your Name" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400">
                @error('name') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="email" name="email" placeholder="Your Email" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400">
                @error('email') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="text" name="phone" placeholder="Phone" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400">
                @error('phone') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <textarea name="message" placeholder="Message" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400"></textarea>
                @error('message') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <div>
                <label class="block mb-2 font-medium text-gray-700">Upload Resume</label>
                <input type="file" name="resume" class="w-full border p-3 rounded-md focus:ring-2 focus:ring-green-400" accept=".pdf,.doc,.docx">
                @error('resume') <small class="text-red-500">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="w-full px-6 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-green-400 to-teal-400 hover:opacity-90 transition">
                Submit Application
            </button>
        </form>

    </div>

</div>

@endsection
