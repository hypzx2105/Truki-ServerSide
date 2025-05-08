@extends('layouts.app') 

@section('content')

{{-- Load CSS for DM Serif + Star Trail --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

{{-- Star trail container --}}
<div id="star-cursor-container" class="star-cursor-container"></div>

<section class="py-20 px-4 bg-white text-center philosophy-section">
    <div id="star-cursor-container" class="star-cursor-container"></div>
    {{-- Floating stars for philosophy section --}}
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>
    <div class="floating-element">✧</div>

    <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 mb-8 tracking-tight dm-serif-text-regular">
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

{{-- Star Trail & Repel Script --}}
<script>
    const starCursorContainer = document.getElementById('star-cursor-container');
    const starSymbols = ['⚝⋆.˚'];
    let stars = [];

    document.addEventListener('mousemove', function(e) {
        const star = document.createElement('div');
        star.className = 'cursor-star';
        star.style.left = e.pageX + 'px';
        star.style.top = e.pageY + 'px';
        star.textContent = starSymbols[Math.floor(Math.random() * starSymbols.length)];

        const size = 0.5 + Math.random() * 1.5;
        star.style.fontSize = size + 'rem';
        star.style.opacity = 0.6 + Math.random() * 0.4;

        starCursorContainer.appendChild(star);
        stars.push({ element: star, life: 100 });

        if (stars.length > 25) {
            const starToRemove = stars.shift();
            starToRemove.element.remove();
        }
    });

    function animateStars() {
        stars.forEach((star, index) => {
            star.life -= 3;
            if (star.life <= 0) {
                star.element.remove();
                stars.splice(index, 1);
            } else {
                star.element.style.opacity = star.life / 100;
                star.element.style.top = (parseFloat(star.element.style.top) - 0.5) + 'px';
            }
        });

        requestAnimationFrame(animateStars);
    }

    animateStars();

    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.floating-element');
        const section = document.querySelector('.philosophy-section');

        section.addEventListener('mousemove', (e) => {
            stars.forEach(star => {
                const rect = star.getBoundingClientRect();
                const starX = rect.left + rect.width / 2;
                const starY = rect.top + rect.height / 2;
                const dx = e.clientX - starX;
                const dy = e.clientY - starY;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < 120) {
                    const speed = parseFloat(star.getAttribute('data-speed')) || 0.1;
                    const force = (120 - distance) / 120 * 10 * speed;
                    const newX = starX - (dx / distance) * force;
                    const newY = starY - (dy / distance) * force;

                    star.style.transform = `translate(${newX - rect.left - rect.width / 2}px, ${newY - rect.top - rect.height / 2}px)`;
                }
            });
        });

        section.addEventListener('mouseleave', () => {
            stars.forEach(star => {
                star.style.transform = 'translate(0, 0)';
            });
        });
    });
</script>
@endsection