@extends('admin.layouts.app')

@section('page-title', 'Edit Job')

@section('content')

<div class="flex justify-between mb-6 items-center">
    <h2 class="text-3xl font-bold text-gray-800">Edit Job</h2>
    <a href="{{ route('admin.jobs.index') }}"
       class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-2 rounded shadow transition">
        Cancel
    </a>
</div>

<div class="bg-white shadow-xl rounded-xl p-6 relative overflow-hidden">
    <!-- Top Gradient Bar -->
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500"></div>

    <form method="POST" action="{{ route('admin.jobs.update', $job->id) }}" class="mt-4">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Title</label>
                <input type="text" name="title" value="{{ $job->title }}" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Location</label>
                <input type="text" name="location" value="{{ $job->location }}" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Experience</label>
                <input type="text" name="experience" value="{{ $job->experience }}" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block mb-2 font-semibold text-gray-700">Description</label>
                <textarea name="description" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" rows="1">{{ $job->description }}</textarea>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4 mt-4">
            <button class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-3 rounded-lg shadow hover:opacity-90 transition w-full md:w-auto w-100">
                Update Job
            </button>
        </div>

    </form>

</div>

@endsection