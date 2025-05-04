@extends('layouts.app')

@section('title', 'Edit Portfolio')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Edit Portfolio</h1>

    <form method="POST" action="{{ route('portfolios.update', $portfolio) }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" class="w-full p-2 border rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Content</label>
            <textarea name="content" rows="5" class="w-full p-2 border rounded" required>{{ old('content', $portfolio->content) }}</textarea>
        </div>

        @if ($portfolio->media_url)
            <div>
                <p class="text-sm text-gray-600 mb-1">Current Image:</p>
                <img src="{{ asset('storage/' . $portfolio->media_url) }}" alt="Current Image" class="max-w-xs rounded">
            </div>
        @endif

        <div>
            <label class="block text-sm font-medium">Replace Image (optional)</label>
            <input type="file" name="media" accept="image/*" class="mt-1">
        </div>

        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
@endsection
