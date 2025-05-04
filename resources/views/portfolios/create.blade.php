@extends('layouts.app')

@section('title', 'Create Portfolio')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create a New Portfolio</h1>

    <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block font-medium mb-1">Title</label>
            <input type="text" name="title" required
                   class="w-full border rounded p-2" placeholder="Enter title">
        </div>

        <div>
            <label class="block font-medium mb-1">Content</label>
            <textarea name="content" rows="5" required
                      class="w-full border rounded p-2" placeholder="Describe your project"></textarea>
        </div>

        <div>
            <label class="block font-medium mb-1">Upload Image (optional)</label>
            <input type="file" name="media" class="w-full border rounded p-2">
        </div>

        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
            Save Portfolio
        </button>
    </form>
@endsection
