@extends('layouts.admin')

@section('title', 'Manage Contacts')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h3 class="text-xl font-bold">Message List</h3>
        <a href="{{ route('admin.contacts.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Add New Contact
        </a>
    </div>

    <div class="bg-gray-800 rounded-lg shadow overflow-x-auto border border-gray-700">
        <table class="w-full text-left text-sm text-gray-400">
            <thead class="bg-gray-700 text-gray-200 uppercase">
                <tr>
                    <th class="px-6 py-3">Date</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Message</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @forelse($contacts as $contact)
                <tr class="hover:bg-gray-700">
                    <td class="px-6 py-4">{{ $contact->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4 font-medium text-white">{{ $contact->name }}</td>
                    <td class="px-6 py-4">{{ $contact->email }}</td>
                    <td class="px-6 py-4 truncate max-w-xs">{{ Str::limit($contact->message, 50) }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('admin.contacts.edit', $contact) }}" class="text-yellow-400 hover:text-yellow-300">Edit</a>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center">No messages found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
@endsection
