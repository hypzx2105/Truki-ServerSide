@extends('layouts.app')

@section('title', $portfolio->title)

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $portfolio->title }}</h1>

    <p class="text-gray-700 mb-6">{{ $portfolio->content }}</p>

    <a href="{{ route('portfolios.index') }}" class="text-blue-600 hover:underline">← Back to list</a>
@endsection
