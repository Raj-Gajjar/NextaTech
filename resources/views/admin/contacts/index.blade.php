@extends('admin.layouts.app')

@section('page-title', 'Contacts')

@section('content')

<div class="flex justify-between mb-6 items-center">
    <h2 class="text-2xl font-bold text-gray-800">Contact Messages</h2>
</div>

<div class="overflow-x-auto">
    <table class="w-full text-center align-middle border-collapse border border-gray-300 rounded">
        <thead class="bg-gradient-to-r from-blue-500 to-teal-500 text-white">
            <tr>
                <th class="py-3 px-4 border border-gray-300" style="width:70px">ID</th>
                <th class="py-3 px-4 border border-gray-300">Name</th>
                <th class="py-3 px-4 border border-gray-300">Email</th>
                <th class="py-3 px-4 border border-gray-300">Subject</th>
                <th class="py-3 px-4 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr class="hover:shadow-lg transition rounded my-1">
                <td class="py-2 px-4 border border-gray-300">{{ $contact->id }}</td>
                <td class="py-2 px-4 border border-gray-300">{{ $contact->name }}</td>
                <td class="py-2 px-2 border border-gray-300">{{ $contact->email }}</td>
                <td class="py-2 px-3 border border-gray-300 ">{{ $contact->subject }}</td>
                <td class="py-2 px-4 border border-gray-300 text-left">
                    <div class="flex justify-center gap-2">
                    <a href="{{ route('admin.contacts.show', $contact->id) }}"
                           class="px-3 py-1 rounded shadow bg-gradient-to-r from-yellow-400 to-orange-400 text-white hover:opacity-90 transition">
                            Show
                    </a>
                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
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
                <td colspan="5" class="py-3 text-center text-gray-600 border border-gray-300">No Messages Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection