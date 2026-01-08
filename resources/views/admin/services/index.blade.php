@extends('layouts.admin')

@section('title', 'Manage Services')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h3 class="text-xl font-bold">Services List</h3>
        <a href="{{ route('admin.services.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Add New Service
        </a>
    </div>

    <div class="bg-gray-800 rounded-lg shadow overflow-hidden border border-gray-700">
        <table class="w-full text-left text-sm text-gray-400">
            <thead class="bg-gray-700 text-gray-200 uppercase">
                <tr>
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @forelse($services as $service)
                <tr class="hover:bg-gray-700">
                    <td class="px-6 py-4 font-medium text-white">{{ $service->title }}</td>
                    <td class="px-6 py-4 truncate max-w-md">{{ Str::limit($service->description, 80) }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('admin.services.edit', $service) }}" class="text-yellow-400 hover:text-yellow-300">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center">No services found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
