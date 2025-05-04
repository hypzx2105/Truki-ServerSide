@extends('layouts.app')

@section('title', $portfolio->title)

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-indigo-700 mb-4">{{ $portfolio->title }}</h1>

        @if ($portfolio->media_url)
            <div class="mb-6">
                <img src="{{ asset('storage/' . $portfolio->media_url) }}" alt="{{ $portfolio->title }}" class="rounded shadow max-w-full">
            </div>
        @endif

        <p class="text-gray-800 text-lg leading-relaxed mb-6">
            {{ $portfolio->content }}
        </p>

        <a href="{{ route('portfolios.index') }}"
           class="inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
            ← Back to Portfolios
        </a>
    </div>
@endsection
