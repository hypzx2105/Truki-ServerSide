@extends('layouts.app') 

@section('content')
<section class="py-20 px-4 bg-white text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-8 tracking-tight">
        The Lore Behind <span class="text-blue-600">Truki</span>
    </h1>

    <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-10 leading-relaxed">
        “Truki” is inspired by the Spanish word <strong>"trueque"</strong>, which refers to the ancient practice of exchange.
        Our platform embraces this concept to empower users to share personal journeys, creative processes, and emotional milestones with others.
    </p>

    <img src="{{ asset('images/truki-origin.png') }}" alt="Truki Origin" class="mx-auto rounded-2xl shadow-xl w-full max-w-2xl mb-12">

    <p class="text-md md:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
        <strong>Truki Lite</strong> isn’t just a digital gallery — it’s a safe haven for your growth.
        Whether you’re a student, a creator, or someone reflecting on daily life, this platform lets you
        <strong>document your progress</strong>, <strong>relieve stress</strong>, and <strong>express your journey</strong> 
        in a meaningful and visual way.
        <br><br>
        Share your creative evolution with the world — or keep it as a private journal of your artistic soul.
    </p>
</section>
@endsection
