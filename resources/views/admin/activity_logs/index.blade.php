@extends('layouts.admin')

@section('title', 'Activity Logs')

@section('content')
<div class="bg-gray-800 rounded-lg shadowoverflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-gray-300">
            <thead class="bg-gray-700 text-gray-100 uppercase text-sm">
                <tr>
                    <th class="py-3 px-6">Time</th>
                    <th class="py-3 px-6">User</th>
                    <th class="py-3 px-6">Action</th>
                    <th class="py-3 px-6">Description</th>
                    <th class="py-3 px-6">IP Address</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-700">
                @forelse($logs as $log)
                <tr class="hover:bg-gray-750 transition duration-150">
                    <td class="py-4 px-6">{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                    <td class="py-4 px-6">{{ $log->user ? $log->user->name : 'Unknown' }}</td>
                    <td class="py-4 px-6">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full 
                            {{ $log->action == 'Login' ? 'bg-green-800 text-green-200' : 
                               ($log->action == 'Logout' ? 'bg-red-800 text-red-200' : 'bg-blue-800 text-blue-200') }}">
                            {{ $log->action }}
                        </span>
                    </td>
                    <td class="py-4 px-6">{{ $log->description }}</td>
                    <td class="py-4 px-6 text-gray-400">{{ $log->ip_address }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-4 px-6 text-center text-gray-500">No activity logs found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t border-gray-700">
        {{ $logs->links() }}
    </div>
</div>
@endsection
