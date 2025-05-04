@extends('layouts.app')

@section('title', 'Edit Portfolio')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Edit Portfolio</h1>

    <form method="POST" action="{{ route('portfolios.update', $portfolio) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" value="{{ $portfolio->title }}" class="w-full p-2 border rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Content</label>
            <textarea name="content" rows="5" class="w-full p-2 border rounded" required>{{ $portfolio->content }}</textarea>
        </div>

        <button class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
