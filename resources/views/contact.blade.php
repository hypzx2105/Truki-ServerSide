@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    {{-- Formulario --}}
    <div class="bg-white shadow-xl rounded-lg p-8 max-w-xl mx-auto mb-16 border border-gray-200">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">📬 Add Your Contact Info</h2>

        @if(session('success'))
            <div class="text-green-600 text-sm text-center font-semibold mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Name</label>
                <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Message</label>
                <textarea name="message" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-300"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-semibold text-gray-700 mb-1">Profile Photo</label>
                <input type="file" name="photo" class="w-full text-sm text-gray-600">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Submit Contact
            </button>
        </form>
    </div>

    {{-- Muro de Contactos --}}
    <h3 class="text-2xl font-bold text-center text-gray-800 mb-6">🌍 Community Wall</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($contacts as $contact)
        <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
            @if($contact->photo)
                <img src="{{ asset('storage/' . $contact->photo) }}" alt="Profile" class="w-full h-48 object-cover">
            @else
                <div class="w-full h-48 bg-gray-100 flex items-center justify-center text-gray-500 text-sm">No Image</div>
            @endif

            <div class="p-4">
                <h4 class="text-lg font-semibold text-gray-800">{{ $contact->name }}</h4>
                <p class="text-sm text-gray-600">{{ $contact->email }}</p>
                <p class="mt-2 text-sm text-gray-700">{{ $contact->message }}</p>

                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="mt-4 text-right">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
