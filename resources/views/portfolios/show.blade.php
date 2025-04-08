@extends('layouts.app')

@section('title', $portfolio->title)

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold text-indigo-700 mb-4">{{ $portfolio->title }}</h1>

        <p class="text-gray-600 mb-6">
            <span class="font-semibold">Author:</span> {{ $portfolio->user->name ?? 'Anonymous' }}
        </p>

        <p class="text-lg text-gray-800 leading-relaxed mb-8">
            {{ $portfolio->description }}
        </p>

        @if ($portfolio->image_url ?? false)
            <img src="{{ $portfolio->image_url }}" alt="Portfolio Image" class="w-full rounded-lg shadow mb-6">
        @endif

        <div class="flex justify-between items-center">
            <a href="{{ route('portfolios.edit', $portfolio) }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded">
                Edit
            </a>

            <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this portfolio?');">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
