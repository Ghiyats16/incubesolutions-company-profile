@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-slate-800 p-8 rounded-xl">
    <h2 class="text-3xl font-bold mb-6 text-center text-blue-400">Contact Us</h2>

    @if(session('success'))
        <div class="bg-green-600/20 text-green-400 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
        @csrf

        <input name="name" placeholder="Name"
               class="w-full p-3 rounded bg-slate-900 border border-slate-700">

        <input name="email" placeholder="Email"
               class="w-full p-3 rounded bg-slate-900 border border-slate-700">

        <textarea name="message" rows="4" placeholder="Message"
                  class="w-full p-3 rounded bg-slate-900 border border-slate-700"></textarea>

        <button class="w-full bg-blue-600 hover:bg-blue-700 py-3 rounded transition">
            Send Message
        </button>
    </form>
</div>
@endsection
