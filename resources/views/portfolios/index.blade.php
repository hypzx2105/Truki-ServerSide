@extends('layouts.app')

@section('title', 'All Portfolios')

@section('content')
    <h1 class="text-2xl font-bold mb-6">All Portfolios</h1>

    <a href="{{ route('portfolios.create') }}"
       class="mb-6 inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
        Create New Portfolio
    </a>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @forelse ($portfolios as $portfolio)
        <div class="bg-white p-4 shadow rounded mb-4">
            <h2 class="text-xl font-semibold">{{ $portfolio->title }}</h2>
            <p class="text-gray-600">{{ Str::limit($portfolio->content, 100) }}</p>
            <div class="mt-2 flex space-x-2">
                <a href="{{ route('portfolios.show', $portfolio) }}" class="text-blue-500 hover:underline">View</a>
                <a href="{{ route('portfolios.edit', $portfolio) }}" class="text-yellow-500 hover:underline">Edit</a>
                <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" onsubmit="return confirm('Delete this portfolio?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p>No portfolios yet.</p>
    @endforelse
@endsection
