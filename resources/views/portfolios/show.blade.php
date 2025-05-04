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

        <div class="flex space-x-2">
            <a href="{{ route('portfolios.edit', $portfolio) }}"
               class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition">
                Edit
            </a>

            <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this portfolio?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                    Delete
                </button>
            </form>
        </div>

        <a href="{{ route('portfolios.index') }}"
           class="inline-block mt-6 text-sm text-indigo-700 hover:underline">
            ← Back to Portfolios
        </a>
    </div>
@endsection
