@extends('layouts.app')

@section('title', 'Create Portfolio')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Create Portfolio</h1>

    <form method="POST" action="{{ route('portfolios.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" class="w-full p-2 border rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Content</label>
            <textarea name="content" rows="5" class="w-full p-2 border rounded" required></textarea>
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
