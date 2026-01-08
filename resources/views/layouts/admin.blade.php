<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - IncubeSolutions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 border-r border-gray-700 hidden md:block">
            <div class="p-6">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-500">IncubeAdmin</a>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.services.index') }}" class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.services.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                    Services
                </a>
                <a href="{{ route('admin.contacts.index') }}" class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.contacts.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                    Contacts
                </a>
                
                <a href="{{ route('admin.profile.edit') }}" class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('admin.profile.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                    Profile Settings
                </a>
                
                <form action="{{ route('logout') }}" method="POST" class="mt-4 border-t border-gray-700 pt-4">
                    @csrf
                    <button type="submit" class="w-full text-left block py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 text-red-400 hover:text-white">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="flex justify-between items-center py-4 px-6 bg-gray-800 border-b border-gray-700">
                <div class="flex items-center">
                    <button class="md:hidden text-gray-300 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-100">@yield('title')</h2>
                </div>
                <div>
                     <span class="text-gray-300">Administrator</span>
                </div>
            </header>

            <!-- Main -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-900 p-6">
                @if(session('success'))
                    <div class="bg-green-600 text-white p-4 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
