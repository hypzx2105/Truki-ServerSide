@extends('layouts.app')

@section('title', 'Portfolios')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Portfolios</h1>

    @foreach ($portfolios as $portfolio)
        <div class="bg-white p-4 mb-3 shadow rounded">
            <h2 class="text-xl font-semibold">{{ $portfolio->title }}</h2>
            <p class="text-sm text-gray-600">By {{ $portfolio->user->name }}</p>
            <p class="mt-2">{{ Str::limit($portfolio->content, 150) }}</p>
            <a href="{{ route('portfolios.show', $portfolio) }}" class="text-blue-600 hover:underline">View</a>
        </div>
    @endforeach
@endsection
