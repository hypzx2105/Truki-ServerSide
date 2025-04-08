@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">Bienvenido a Truki </h1>
    
        <a href="{{ route('portfolios.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Explore Portfolios
        </a>
    </div>
@endsection
