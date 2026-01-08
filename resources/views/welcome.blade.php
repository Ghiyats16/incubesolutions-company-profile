@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center text-center">
    <div>
        <h1 class="text-5xl font-bold mb-6">
            Build Digital Solutions<br>
            <span class="text-blue-500">For Modern Business</span>
        </h1>

        <p class="text-slate-400 max-w-2xl mx-auto mb-8">
            IncubeSolutions membantu bisnis berkembang melalui teknologi modern,
            desain profesional, dan sistem yang scalable.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block px-8 py-4 bg-blue-600 rounded-xl hover:bg-blue-700 transition">
            Get in Touch
        </a>
    </div>
</section>
@endsection
