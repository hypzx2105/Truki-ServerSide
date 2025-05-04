@extends('layouts.app')

@section('title', 'Portfolios')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">All Portfolios</h1>
        <a href="{{ route('portfolios.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
            + New Portfolio
        </a>
    </div>

    <form method="GET" action="{{ route('portfolios.index') }}" class="mb-6">
        <input type="text" name="search" placeholder="Search portfolios..."
               value="{{ request('search') }}"
               class="w-full p-2 border rounded shadow-sm">
    </form>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-medium">
            {{ session('success') }}
        </div>
    @endif

    @if($portfolios->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($portfolios as $portfolio)
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold text-indigo-700">{{ $portfolio->title }}</h2>
                    <p class="text-gray-700 mt-2">{{ $portfolio->content }}</p>

                    @if($portfolio->media_url)
                        <img src="{{ asset('storage/' . $portfolio->media_url) }}"
                             alt="Portfolio Image"
                             class="w-full h-60 object-cover rounded mt-4 mb-4 shadow-sm">
                    @endif

                    <div class="flex space-x-2 mt-4">
                        <a href="{{ route('portfolios.edit', $portfolio) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                            Edit
                        </a>

                        <form action="{{ route('portfolios.destroy', $portfolio) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this portfolio?');">
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
        <p class="text-gray-600">No portfolios found.</p>
    @endif
@endsection
