@extends('layouts.app')

@section('content')

{{-- HOME --}}
<section id="home" class="min-h-screen flex items-center justify-center text-center px-6">
    <div>
        <h1 class="text-5xl md:text-6xl font-bold mb-6">
            Build Digital Solutions <br>
            <span class="text-blue-500">For Modern Business</span>
        </h1>

        <p class="text-slate-400 max-w-2xl mx-auto mb-8">
            IncubeSolutions membantu bisnis berkembang melalui teknologi modern,
            desain profesional, dan sistem yang scalable.
        </p>

        <a href="#services"
           class="inline-block px-8 py-4 bg-blue-600 rounded-xl hover:bg-blue-700 transition">
            Our Services
        </a>
    </div>
</section>

{{-- ABOUT --}}
<section id="about" class="min-h-screen flex items-center bg-slate-800 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10">
        <div>
            <h2 class="text-4xl font-bold mb-4">About Us</h2>
            <p class="text-slate-400">
                Kami adalah tim digital kreatif yang fokus membangun solusi web modern,
                cepat, dan aman untuk bisnis masa kini.
            </p>
        </div>
        <div class="bg-slate-900 rounded-xl p-8">
            <ul class="space-y-4 text-slate-300">
                <li>✔ Web Development</li>
                <li>✔ UI/UX Design</li>
                <li>✔ System Integration</li>
                <li>✔ Maintenance</li>
            </ul>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section id="services" class="min-h-screen flex items-center px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-12">Our Services</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-slate-800 p-8 rounded-xl hover:scale-105 transition">
                <h3 class="text-xl font-semibold mb-3">{{ $service->title }}</h3>
                <p class="text-slate-400">{{ $service->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
