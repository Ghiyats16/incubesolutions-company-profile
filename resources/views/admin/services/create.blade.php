@extends('layouts.admin')

@section('title', 'Add Service')

@section('content')
    <div class="max-w-2xl bg-gray-800 rounded-lg border border-gray-700 p-6">
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Title</label>
                <input type="text" name="title" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Description</label>
                <textarea name="description" rows="5" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required></textarea>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.services.index') }}" class="px-4 py-2 bg-gray-600 rounded text-white hover:bg-gray-500">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 rounded text-white hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
@endsection
