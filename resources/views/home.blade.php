@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
    <div class="text-center mt-16">
        <h1 class="text-5xl font-extrabold text-indigo-600 mb-4">Welcome to Truki</h1>
        <p class="text-lg text-gray-700 mb-6">Explore abilities and connect with people</p>

        <a href="{{ route('portfolios.index') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
            Explore Portfolios
        </a>
    </div>

    <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
            <h3 class="text-xl font-bold text-indigo-600 mb-2">Create your own portfolio</h3>
            <p class="text-gray-600">Present your abilities and skills in one single place.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
            <h3 class="text-xl font-bold text-indigo-600 mb-2">Publish your works</h3>
            <p class="text-gray-600">upload images, description and show what you know to do.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
            <h3 class="text-xl font-bold text-indigo-600 mb-2">Connect with others</h3>
            <p class="text-gray-600">Explore what others do and connect with them!.</p>
        </div>
    </div>
@endsection
