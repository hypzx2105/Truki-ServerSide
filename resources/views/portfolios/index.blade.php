@extends('layouts.app')

@section('title', 'Portfolios')

@section('content')
    <div class="text-center mt-10">
        <h1 class="text-4xl font-bold text-indigo-600 mb-6">Portfolio</h1>
        <a href="{{ route('portfolios.create') }}"
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg mb-8">
            Create New Portfolio
        </a>
    </div>

    @if($portfolios->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($portfolios as $portfolio)
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $portfolio->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($portfolio->description, 100) }}</p>
                        <a href="{{ route('portfolios.show', $portfolio) }}"
                           class="text-indigo-600 hover:underline font-semibold">see more</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-500 mt-20">There are not portfolios yet.</p>
    @endif
@endsection
