@extends('layouts.admin')

@section('title', 'Services from API')

@section('content')
<div class="bg-gray-800 rounded-lg shadow-lg p-6">
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white mb-4 md:mb-0">Services Data</h1>
        <span class="px-4 py-2 rounded-full bg-blue-600 text-white text-sm font-semibold shadow-sm">
            Source: REST API
        </span>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-gray-300">
            <thead class="bg-gray-700 text-gray-100 uppercase text-sm font-medium">
                <tr>
                    <th class="py-3 px-4 rounded-tl-lg">#</th>
                    <th class="py-3 px-4">Title</th>
                    <th class="py-3 px-4 rounded-tr-lg">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @forelse ($services as $service)
                    <tr class="hover:bg-gray-700 transition duration-150 ease-in-out">
                        <td class="py-3 px-4 font-medium text-gray-400">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4 text-white font-semibold">{{ $service['title'] }}</td>
                        <td class="py-3 px-4 text-gray-400">{{ Str::limit($service['description'], 100) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-8 text-center text-gray-500">
                            <svg class="mx-auto h-12 w-12 text-gray-600 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-lg">No services found from API.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
