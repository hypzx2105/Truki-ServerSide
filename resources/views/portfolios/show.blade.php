@extends('layouts.app')

@section('title', $portfolio->title)

@section('content')
    <h1 class="text-2xl font-bold">{{ $portfolio->title }}</h1>
    <p class="text-gray-600 mb-4">By {{ $portfolio->user->name }}</p>

    <div class="mb-4">{{ $portfolio->content }}</div>

    <a href="{{ route('portfolios.edit', $portfolio) }}" class="text-blue-500 hover:underline">Edit</a>
    <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" class="inline-block ml-2">
        @csrf @method('DELETE')
        <button class="text-red-500 hover:underline">Delete</button>
    </form>
@endsection
