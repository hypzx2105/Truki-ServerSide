@extends('layouts.app')

@section('title', 'About Us | Truki Lite')

@section('content')
<!-- Star Cursor Trail Container -->
<div id="star-cursor-container" class="star-cursor-container"></div>

    <!-- Hero Section with Animated Elements -->
    <div class="about-hero">
        <div class="about-hero-stars">
            <div class="about-star about-star-1 animate-sparkle">✦</div>
            <div class="about-star about-star-2 animate-sparkle" style="animation-delay: 0.5s;">✦</div>
            <div class="about-star about-star-3 animate-sparkle" style="animation-delay: 1.2s;">✦</div>
            <div class="about-star about-star-4 animate-sparkle" style="animation-delay: 0.7s;">✦</div>
            <div class="about-star about-star-5 animate-sparkle" style="animation-delay: 1.5s;">✦</div>
        </div>
        <div class="about-hero-content">
            <div class="about-welcome-badge">
                <div class="about-welcome-badge-bg"></div>
                <div class="about-welcome-badge-content">
                    <span class="about-welcome-star">✦</span>
                    <span>Our Story</span>
                    <span class="about-welcome-star">✦</span>
                </div>
            </div>
            <h1 class="about-hero-title dm-serif-text-regular">
                The Ethereal Journey of <span class="text-primary relative overflow-hidden">
                    Truki Lite
                    <span class="absolute inset-0 animate-shimmer opacity-60"></span>
                </span>
            </h1>
            <p class="about-hero-description">
                Where creativity finds its home and imagination meets expression
            </p>
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="wave-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>

    <!-- The Tale Section -->
    <div class="tale-section">
        <div class="tale-bg-overlay"></div>
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="tale-content corner-decoration">
                <span class="star-corner-tl">✦</span>
                <span class="star-corner-br">✦</span>
                
                <h2 class="tale-title dm-serif-text-regular">The Tale of Faery & Ike</h2>
                
                <div class="tale-paragraphs">
                    <p class="tale-paragraph">
                        Once upon a time, in a world where creativity danced on the edge of reality, lived two kindred spirits named Faery and Ike. Faery, with eyes that sparkled like starlight and ideas that bloomed like midnight flowers, could weave stories from whispers caught in the wind. Wherever she wandered, she left trails of inspiration, collecting fragments of beauty in the folds of her imagination.
                    </p>
                    
                    <p class="tale-paragraph">
                        Ike, with hands that could build dreams into tangible wonders and a mind that mapped constellations of possibility, crafted frameworks where magic could flourish. He transformed abstract visions into spaces where creativity could breathe and evolve, his technical artistry as graceful as it was precise.
                    </p>
                    
                    <p class="tale-paragraph">
                        Their paths crossed one twilight evening, when the sky hung between day and dream. Faery's stories needed a home, and Ike's architectures yearned for a soul. Together, they discovered that their separate magics, when combined, created something extraordinary—a sanctuary where artists could showcase their journey, connect with kindred spirits, and watch their creative evolution unfold.
                    </p>
                    
                    <p class="tale-paragraph">
                        From this union of visionary and architect, Truki Lite was born—a place where portfolios become portals to new worlds, where each creator's journey is honored, and where the community of artistic souls finds both harbor and horizon. This isn't merely a platform; it's an invitation to join a story that continues to unfold with every new voice that joins our chorus.
                    </p>
                    
                    <p class="tale-paragraph">
                        Welcome to our realm of imagination and expression—we've been waiting for you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Symbol Divider -->
    <div class="symbol-divider">
        <span>✦</span>
    </div>

    <!-- Our Philosophy Section -->
    <div class="philosophy-section">
        <div class="container mx-auto px-4">
            <h2 class="philosophy-title text-center dm-serif-text-regular">Our Philosophy</h2>
            <p class="philosophy-subtitle text-center">Guiding principles that shape our creative sanctuary</p>
            
            <div class="mx-auto w-24 h-px bg-gradient-to-r from-transparent via-primary to-transparent my-4"></div>
            
            <div class="philosophy-cards">
                <div class="philosophy-card hover-lift">
                    <div class="philosophy-icon">
                        <span>❂</span>
                    </div>
                    <h3 class="philosophy-card-title">Authentic Expression</h3>
                    <p class="philosophy-card-text">
                        We believe in the power of genuine creative voices. Each portfolio on Truki Lite represents 
                        an authentic journey, unfiltered and true to the artist's vision.
                    </p>
                    <div class="card-highlight"></div>
                </div>
                
                <div class="philosophy-card hover-lift">
                    <div class="philosophy-icon">
                        <span>✦</span>
                    </div>
                    <h3 class="philosophy-card-title">Creative Community</h3>
                    <p class="philosophy-card-text">
                        Art flourishes in connection. We foster meaningful relationships between creators, 
                        building bridges that inspire new possibilities and collaborative magic.
                    </p>
                    <div class="card-highlight"></div>
                </div>
                
                <div class="philosophy-card hover-lift">
                    <div class="philosophy-icon">
                        <span>⚘</span>
                    </div>
                    <h3 class="philosophy-card-title">Continuous Growth</h3>
                    <p class="philosophy-card-text">
                        The creative journey never truly ends. We celebrate evolution, providing tools 
                        to document progress and showcase the beautiful transformation of artistic expression.
                    </p>
                    <div class="card-highlight"></div>
                </div>
            </div>
        </div>
        <div class="floating-element" data-speed="0.1">✦</div>
    <!-- Floating Background Elements (10+ stars/symbols) -->
<div class="floating-element" data-speed="0.05" data-size="1.2">✧</div>
<div class="floating-element" data-speed="0.1" data-size="1.5">✦</div>
<div class="floating-element" data-speed="0.15" data-size="1.8">✷</div>
<div class="floating-element" data-speed="0.2" data-size="2.0">✺</div>
<div class="floating-element" data-speed="0.1" data-size="1.3">✵</div>
<div class="floating-element" data-speed="0.25" data-size="1.7">✳</div>
<div class="floating-element" data-speed="0.18" data-size="1.4">✸</div>
<div class="floating-element" data-speed="0.12" data-size="1.6">✹</div>
<div class="floating-element" data-speed="0.3" data-size="2.2">❂</div>
<div class="floating-element" data-speed="0.22" data-size="1.9">⚝</div>
    </div>

    <!-- Wave Divider Inverted -->
    <div class="wave-divider transform rotate-180">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
        </svg>
    </div>

    <!-- The Creators Section -->
    <div class="creators-section">
        <div class="container mx-auto px-4 max-w-5xl">
            <h2 class="creators-title text-center dm-serif-text-regular">The Dreamweavers</h2>
            <p class="creators-subtitle text-center">The minds and hearts behind Truki Lite</p>
            
            <div class="mx-auto w-24 h-px bg-gradient-to-r from-transparent via-primary to-transparent my-6"></div>
            
            <div class="creators-profiles">
                <div class="creator-profile">
                    <div class="creator-image-container">
                        <img src="https://i.pinimg.com/736x/7b/f9/33/7bf933535dc4c1396657696341a88855.jpg" alt="Faery" class="creator-image">
                        <div class="creator-image-overlay"></div>
                    </div>
                    <div class="creator-details">
                        <div class="creator-name-badge">
                            <span class="creator-badge-star">✦</span>
                            <h3 class="creator-name">Faery</h3>
                            <span class="creator-badge-star">✦</span>
                        </div>
                        <p class="creator-role">Creative Director & Storyteller</p>
                        <p class="creator-bio">
                            With an eye for beauty and a heart full of stories, Faery brings the poetic vision 
                            to Truki Lite. Her background in visual arts and literature shapes the aesthetic 
                            experience, ensuring that each creative journey finds its most eloquent expression.
                        </p>
                        <div class="creator-signature">— Weaving dreams into reality</div>
                    </div>
                </div>
                
                <div class="creator-profile reverse">
                    <div class="creator-details">
                        <div class="creator-name-badge">
                            <span class="creator-badge-star">✦</span>
                            <h3 class="creator-name">Ike</h3>
                            <span class="creator-badge-star">✦</span>
                        </div>
                        <p class="creator-role">Technical Architect & Visionary</p>
                        <p class="creator-bio">
                            The architect behind the scenes, Ike transforms abstract ideas into functional beauty. 
                            With a passion for elegant solutions and intuitive experiences, he crafts the 
                            framework where creative expression can flourish without boundaries.
                        </p>
                        <div class="creator-signature">— Building bridges between imagination and form</div>
                    </div>
                    <div class="creator-image-container">
                        <img src="https://i.pinimg.com/736x/ea/8b/b9/ea8bb9a2c60481767410f6715e4d61ee.jpg" alt="Ike" class="creator-image">
                        <div class="creator-image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Ocean Section -->
    <div class="py-20 relative overflow-hidden cta-ocean-section">
        <!-- Animated waves background -->
        <div class="cta-ocean-bg"></div>
        <div class="cta-wave cta-wave-1"></div>
        <div class="cta-wave cta-wave-2"></div>
        <div class="cta-wave cta-wave-3"></div>
        
        <!-- Floating Elements -->
        <div class="floating-element top-1/4 left-1/4 text-white text-2xl animate-float">✦</div>
        <div class="floating-element bottom-1/4 right-1/4 text-white text-xl animate-float" style="animation-delay: 1s;">✦</div>
        <div class="floating-element top-1/3 right-1/3 w-4 h-4 bg-white rounded-full opacity-20 animate-pulse-slow"></div>
        <div class="floating-element bottom-1/3 left-1/3 w-6 h-6 bg-white rounded-full opacity-10 animate-pulse-slow" style="animation-delay: 2s;"></div>
            
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white dm-serif-text-regular mb-6 fade-in-up text-shadow">
                Join Our Creative Odyssey
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed fade-in-up text-shadow" style="transition-delay: 0.2s;">
                Become part of a community where your artistic journey is celebrated and your creative evolution finds its voice.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center fade-in-up" style="transition-delay: 0.4s;">
                <a href="/register" class="bg-white hover:bg-gray-100 text-primary font-semibold py-3 px-10 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
                    Begin Your Story
                </a>
                <a href="/portfolios" class="bg-transparent hover:bg-white/10 text-white font-semibold py-3 px-10 rounded-full border-2 border-white transition-all duration-300 transform hover:scale-105" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);">
                    Explore Portfolios 
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript for animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize scroll animations
            const fadeElements = document.querySelectorAll('.fade-in-up, .tale-paragraph, .philosophy-card, .creator-profile');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
            
            // Parallax effect for hero section
            const aboutHero = document.querySelector('.about-hero');
            const stars = document.querySelectorAll('.about-star');
            
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY;
                
                if (aboutHero) {
                    aboutHero.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
                }
                
                stars.forEach((star, index) => {
                    const speed = 0.2 + (index * 0.1);
                    const yPos = -scrollPosition * speed;
                    star.style.transform = `translateY(${yPos}px) rotate(${scrollPosition * 0.02}deg)`;
                });
            });
        });

        // Cursor Star Trail Effect
const starCursorContainer = document.getElementById('star-cursor-container');
const starSymbols = ['✦', '✧', '❂', '⚘', '✲'];
let stars = [];

document.addEventListener('mousemove', function(e) {
    // Create a star element
    const star = document.createElement('div');
    star.className = 'cursor-star';
    star.style.left = e.pageX + 'px';
    star.style.top = e.pageY + 'px';
    star.textContent = starSymbols[Math.floor(Math.random() * starSymbols.length)];
    
    // Random size and color variation
    const size = 0.5 + Math.random() * 1.5;
    star.style.fontSize = size + 'rem';
    star.style.opacity = 0.6 + Math.random() * 0.4;
    
    // Add to DOM
    starCursorContainer.appendChild(star);
    stars.push({
        element: star,
        life: 100 // Life counter for the star
    });
    
    // Limit number of stars for performance
    if (stars.length > 25) {
        const starToRemove = stars.shift();
        starToRemove.element.remove();
    }
});

// Animate stars fade out
function animateStars() {
    stars.forEach((star, index) => {
        star.life -= 3;
        if (star.life <= 0) {
            star.element.remove();
            stars.splice(index, 1);
        } else {
            star.element.style.opacity = star.life / 100;
            // Add some movement
            const currentTop = parseFloat(star.element.style.top);
            star.element.style.top = (currentTop - 0.5) + 'px';
        }
    });
    
    requestAnimationFrame(animateStars);
}

animateStars();

document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.floating-element');
    const philosophySection = document.querySelector('.philosophy-section');

    philosophySection.addEventListener('mousemove', (e) => {
        stars.forEach(star => {
            const rect = star.getBoundingClientRect();
            const starX = rect.left + rect.width / 2;
            const starY = rect.top + rect.height / 2;
            const distanceX = e.clientX - starX;
            const distanceY = e.clientY - starY;
            const distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);

            // Only repel if cursor is within 120px of a star
            if (distance < 120) {
                const speed = parseFloat(star.getAttribute('data-speed')) || 0.1;
                const force = (120 - distance) / 120 * 10 * speed; // Gentle push

                // Calculate new position (smooth easing)
                const newX = starX - (distanceX / distance) * force;
                const newY = starY - (distanceY / distance) * force;

                // Apply transform
                star.style.transform = `translate(${newX - rect.left - rect.width / 2}px, ${newY - rect.top - rect.height / 2}px)`;
            }
        });
    });

    // Reset stars to original position when cursor leaves
    philosophySection.addEventListener('mouseleave', () => {
        stars.forEach(star => {
            star.style.transform = 'translate(0, 0)';
        });
    });
});
    </script>
@endsection