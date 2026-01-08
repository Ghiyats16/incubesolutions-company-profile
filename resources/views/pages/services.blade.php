@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold mb-10 text-center text-blue-400">Our Services</h2>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($services as $service)

        <div class="bg-slate-800 p-6 rounded-xl hover:-translate-y-1 transition">
            <h3 class="text-xl font-semibold mb-3">{{ $service->title }}</h3>
            <p class="text-slate-400 text-sm">
                {{ $service->description }}
            </p>
        </div>

        @endforeach
    </div>
</section>
@endsection
