@extends('layouts.app')

@section('title', 'Portfolios')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">All Portfolios</h1>
        <a href="{{ route('portfolios.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
            + New Portfolio
        </a>
    </div>

  
    <form method="GET" action="{{ route('portfolios.index') }}" class="mb-6 max-w-md">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Search portfolios..."
            class="w-full p-2 border border-gray-300 rounded"
        >
    </form>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-medium">
            {{ session('success') }}
        </div>
    @endif

    @if($portfolios->count())
        <div class="grid gap-6">
            @foreach($portfolios as $portfolio)
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold text-indigo-700">{{ $portfolio->title }}</h2>
                    <p class="text-gray-700 mt-2">{{ $portfolio->content }}</p>

                    @if($portfolio->media_url)
                        <img src="{{ asset('storage/' . $portfolio->media_url) }}"
                             alt="Portfolio Image"
                             class="mt-4 max-w-xs rounded shadow">
                    @endif

                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('portfolios.edit', $portfolio) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                            Edit
                        </a>

                        <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600">No portfolios found yet.</p>
    @endif
@endsection
