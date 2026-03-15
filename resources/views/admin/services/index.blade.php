@extends('admin.layouts.app')

@section('page-title', 'Services')

@section('content')

<div class="flex justify-between mb-6 items-center">
    <h2 class="text-2xl font-bold text-gray-800">Services</h2>
    <a href="{{ route('admin.services.create') }}"
       class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-5 py-2 rounded shadow hover:opacity-90 transition">
        Add Service
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full text-center align-middle border-collapse border border-gray-300 rounded">
        <thead class="bg-gradient-to-r from-blue-500 to-teal-500 text-white">
            <tr>
                <th class="py-3 px-4 border border-gray-300">Title</th>
                <th class="py-3 px-4 border border-gray-300">Status</th>
                <th class="py-3 px-4 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($services as $service)
            <tr class="hover:shadow-lg transition rounded my-1">
                <td class="py-2 px-4 border border-gray-300">{{ $service->title }}</td>
                <td class="py-2 px-4 border border-gray-300">
                    @if($service->status)
                    <span class="px-3 py-1 rounded-full bg-green-500 text-white text-sm">Active</span>
                    @else
                    <span class="px-3 py-1 rounded-full bg-red-500 text-white text-sm">Inactive</span>
                    @endif
                </td>
                <td class="py-2 px-4 border border-gray-300">
                    <div class="flex justify-center gap-2">
                        <a href="{{ route('admin.services.edit', $service->id) }}"
                           class="px-3 py-1 rounded shadow bg-gradient-to-r from-yellow-400 to-orange-400 text-white hover:opacity-90 transition">
                            Edit
                        </a>

                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 rounded shadow bg-gradient-to-r from-purple-500 to-blue-500 text-white hover:opacity-90 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="py-3 text-center text-gray-600 border border-gray-300">No Services Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection