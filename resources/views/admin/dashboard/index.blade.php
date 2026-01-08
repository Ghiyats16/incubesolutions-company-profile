@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Stats Card: Services -->
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 shadow-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-600 bg-opacity-75">
                    <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-400 truncate">
                            Total Services
                        </dt>
                        <dd>
                            <div class="text-2xl font-semibold text-white">
                                {{ $totalServices }}
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.services.index') }}" class="text-sm text-blue-400 hover:text-blue-300 font-medium">
                    View all services &rarr;
                </a>
            </div>
        </div>

        <!-- Stats Card: Contacts -->
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 shadow-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-600 bg-opacity-75">
                    <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-400 truncate">
                            Total Messages
                        </dt>
                        <dd>
                            <div class="text-2xl font-semibold text-white">
                                {{ $totalContacts }}
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.contacts.index') }}" class="text-sm text-green-400 hover:text-green-300 font-medium">
                    View all messages &rarr;
                </a>
            </div>
        </div>

        <!-- Stats Card: Messages Today -->
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 shadow-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-600 bg-opacity-75">
                    <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-400 truncate">
                            Messages Today
                        </dt>
                        <dd>
                            <div class="text-2xl font-semibold text-white">
                                {{ $messagesToday }}
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Stats Card: Last Login -->
        <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 shadow-lg">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-600 bg-opacity-75">
                    <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-400 truncate">
                            Last Login Admin
                        </dt>
                        <dd>
                            <div class="text-lg font-semibold text-white">
                                @if($lastLogin)
                                    {{ $lastLogin->created_at->diffForHumans() }}
                                @else
                                    Never
                                @endif
                                <p class="text-xs text-gray-500">{{ $lastLogin ? $lastLogin->user->name : '' }}</p>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="mt-4">
                 <a href="{{ route('admin.activity-logs.index') }}" class="text-sm text-purple-400 hover:text-purple-300 font-medium">
                    View activity logs &rarr;
                </a>
            </div>
        </div>
    </div>
@endsection
