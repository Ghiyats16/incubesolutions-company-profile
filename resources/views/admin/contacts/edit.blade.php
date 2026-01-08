@extends('layouts.admin')

@section('title', 'Edit Contact')

@section('content')
    <div class="max-w-2xl bg-gray-800 rounded-lg border border-gray-700 p-6">
        <form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Name</label>
                <input type="text" name="name" value="{{ $contact->name }}" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Email</label>
                <input type="email" name="email" value="{{ $contact->email }}" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Message</label>
                <textarea name="message" rows="4" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>{{ $contact->message }}</textarea>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.contacts.index') }}" class="px-4 py-2 bg-gray-600 rounded text-white hover:bg-gray-500">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 rounded text-white hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
@endsection
