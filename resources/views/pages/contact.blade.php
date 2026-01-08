@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-20 px-6">
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
        @csrf

        <input name="name" placeholder="Name" required
               class="w-full p-3 rounded bg-slate-800 border border-slate-600">

        <input name="email" type="email" placeholder="Email" required
               class="w-full p-3 rounded bg-slate-800 border border-slate-600">

        <textarea name="message" rows="4" placeholder="Message"
                  class="w-full p-3 rounded bg-slate-800 border border-slate-600"></textarea>

        <button class="w-full bg-blue-600 py-3 rounded hover:bg-blue-700 transition">
            Send Message
        </button>
    </form>
</div>
@endsection
