<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IncubeAdmin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md border border-gray-700">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-500">Admin Login</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-400 mb-2 text-sm">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required autofocus>
            </div>

            <div class="mb-6">
                <label class="block text-gray-400 mb-2 text-sm">Password</label>
                <input type="password" name="password" class="w-full bg-gray-700 border border-gray-600 rounded px-3 py-2 text-white focus:outline-none focus:border-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                Log In
            </button>
        </form>
        
        <div class="mt-4 text-center">
            <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-400">Back to Website</a>
        </div>
    </div>
</body>
</html>
