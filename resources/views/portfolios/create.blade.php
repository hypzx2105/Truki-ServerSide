@extends('layouts.app')

@section('title', 'New Portfolio')

@section('content')
    <h1 class="text-xl font-bold mb-4">Create Portfolio</h1>

    <form method="POST" action="{{ route('portfolios.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" class="w-full p-2 border rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Content</label>
            <textarea name="content" rows="4" class="w-full p-2 border rounded" required></textarea>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
