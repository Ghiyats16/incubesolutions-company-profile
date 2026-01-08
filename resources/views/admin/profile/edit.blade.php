@extends('layouts.admin')

@section('title', 'Profile Settings')

@section('content')
    <div class="max-w-2xl bg-gray-800 rounded-lg border border-gray-700 p-6">
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            
            <h4 class="text-lg font-semibold text-blue-400 mb-4 border-b border-gray-700 pb-2">Account Information</h4>

            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>
            </div>

            <h4 class="text-lg font-semibold text-blue-400 mb-4 border-b border-gray-700 pb-2">Change Password <span class="text-sm text-gray-500 font-normal ml-2">(Optional)</span></h4>

            <div class="mb-4">
                <label class="block text-gray-300 mb-2">New Password</label>
                <input type="password" name="password" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" placeholder="Leave blank to keep current password">
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Confirm New Password</label>
                <input type="password" name="password_confirmation" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500">
            </div>

            <div class="flex justify-end gap-2">
                <button type="submit" class="px-6 py-2 bg-blue-600 rounded text-white hover:bg-blue-700 font-medium">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
