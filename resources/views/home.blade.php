@extends('layouts.app')

@section('title', 'Welcome to Truki Lite')

@section('content')
    <!-- Main Content Container -->
    <div class="main-content">
        <!-- Hero Section - More whimsical -->
        <div class="hero-split-section">
            <!-- Add this to your home.blade.php, right after the opening div of hero-split-section -->
            <div class="hero-abstract-shapes">
                <div class="hero-blob hero-blob-1"></div>
                <div class="hero-blob hero-blob-2"></div>
                <div class="hero-blob hero-blob-3"></div>
                <!-- Example: Add to the stars in your hero section -->
<div class="hero-star hero-star-1 animate-sparkle">✦</div>
<div class="hero-star hero-star-2 animate-sparkle" style="animation-delay: 0.5s;">✦</div>
                <div class="hero-dot hero-dot-1"></div>
                <div class="hero-dot hero-dot-2"></div>
                <div class="hero-dot hero-dot-3"></div>
            </div>
            <!-- Add these new floating elements - they'll be animated -->
<div class="hero-interactive-elements">
    <div class="hero-float-element hero-float-1">✦</div>
    <div class="hero-float-element hero-float-2">✦</div>
    <div class="hero-float-element hero-float-3"></div>
    <div class="hero-float-element hero-float-4"></div>
</div>

            <!-- Left side with video -->
            <div class="hero-split-video">
                <video autoplay muted loop playsinline class="hero-bg">
                    <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- Add these decorative stars under the video -->
    <div class="absolute bottom-4 left-1/4 text-primary opacity-30 animate-float" style="font-size: 1rem; animation-delay: 0.5s;">✦</div>
    <div class="absolute bottom-6 right-1/4 text-primary opacity-20 animate-float" style="font-size: 1.2rem; animation-delay: 1.2s;">✦</div>
            </div>
            
            <!-- Center divider -->
            <div class="hero-divider"></div>
            
            <!-- Right side with content -->
            <div class="hero-split-content">
                <div class="truki-welcome-badge">
                    <div class="truki-welcome-badge-bg"></div>
                    <div class="truki-welcome-badge-content">
                        <span class="truki-welcome-star">✦</span>
                        <span>Welcome to Truki Lite</span>
                        <span class="truki-welcome-star">✦</span>
                    </div>
                </div>
                <h1 class="hero-title">
    Where <span class="text-primary dm-serif-text-regular relative overflow-hidden">
        Imagination
        <span class="absolute inset-0 animate-shimmer opacity-60"></span>
    </span> Meets<br>
    <span class="text-primary dm-serif-text-regular relative overflow-hidden">
        Expression
        <span class="absolute inset-0 animate-shimmer opacity-60"></span>
    </span>
</h1>
                <p class="hero-description">
                    A sanctuary for your creative spirit. Showcase your journey, connect with kindred souls, 
                    and let your work shine in a space designed to celebrate artistic evolution. 
                    Every portfolio tells a story—what will yours be?
                </p>
                <a href="{{ route('portfolios.index') }}" class="hero-button group">
                    <span class="group-hover:pr-2 transition-all duration-300">Explore Portfolios</span>
                    <span class="opacity-0 group-hover:opacity-100 transition-all duration-300">→</span>
                </a>
                <!-- Add decorative stars under the button -->
<div class="relative h-10 w-full mt-2">
    <div class="absolute left-10 text-primary opacity-20 animate-float" style="font-size: 0.9rem; animation-delay: 0.3s;">✦</div>
    <div class="absolute left-24 text-primary opacity-30 animate-float" style="font-size: 1.1rem; animation-delay: 1.5s;">✦</div>
</div>
            </div>
        </div>
        <!-- Add this after the Hero Section in home.blade.php -->
        <div class="wave-divider">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
        
        <!-- Page Title with Fancy Font - More elegant -->
        <div class="page-title-container">
            <h2 class="meie-script-regular text-center text-primary transform hover:scale-105 transition duration-300">Truki Lite</h2>
            <p class="text-center text-gray-600 tracking-wider">A curated gallery for the creative soul</p>
            <div class="mx-auto w-24 h-px bg-gradient-to-r from-transparent via-primary to-transparent my-4"></div>
        </div>
        <!-- Add this after Page Title Container -->
        <div class="symbol-divider">
            <span>✦</span>
        </div>

        <!-- Intro Section - More sophisticated -->
        <div class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="bg-primary-light p-8 md:p-12 rounded-xl border-l-4 border-primary transform hover:-translate-y-1 transition duration-300 corner-decoration hover-lift">
                    <div class="corner-bottom-right"></div>
                    <span class="star-corner-tl">✦</span>
                    <span class="star-corner-br">✦</span>
                    
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dm-serif-text-regular mb-4">
                        Your <span class="text-primary">Creative Odyssey</span>, Documented
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        In a world where creativity knows no bounds, your portfolio becomes the compass that guides 
                        others through your artistic journey. Truki Lite offers more than a showcase—it's a living 
                        narrative of your growth, a testament to your vision, and a bridge to opportunities that 
                        resonate with your unique voice.
                    </p>
                    <a href="/portfolios/create" 
                       class="inline-flex items-center bg-primary hover:bg-primary-dark text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 group">
                        <span class="group-hover:pr-2 transition-all duration-300">Begin Your Journey</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-0 group-hover:opacity-100 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

       <!-- Auto-Scrolling Carousel with floral background -->
<div class="relative w-full overflow-hidden py-10 toolkit-section" style="z-index: 1;">
    <!-- Subtle floral background -->
    <div class="toolkit-bg-overlay"></div>
    <div class="container mx-auto px-4 mb-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 dm-serif-text-regular mb-3">
                The <span class="text-primary">Artisan's Toolkit</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto tracking-wide">
                Designed to nurture and showcase your creative essence
            </p>
            <div class="mx-auto w-16 h-px bg-gradient-to-r from-transparent via-primary to-transparent my-4"></div>
        </div>
    </div>

    <!-- Carousel container with hidden overflow -->
    <div class="carousel-container" style="padding: 20px;">
        <!-- Carousel track that animates -->
        <div class="carousel-track animate-scroll">
            <!-- Original Features -->
            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">✎</span>
                </div>
                <h3 class="feature-title">Curated Showcases</h3>
                <p class="feature-description">
                    Craft a visual symphony of your work, where each piece harmonizes with the next to tell 
                    your unique creative story.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">✦</span>
                </div>
                <h3 class="feature-title">Visual Narratives</h3>
                <p class="feature-description">
                    Transform your process into poetry. Pair images with lyrical descriptions that reveal 
                    the soul behind each creation.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">❂</span>
                </div>
                <h3 class="feature-title">Creative Kinship</h3>
                <p class="feature-description">
                    Discover your creative tribe. Engage in meaningful exchanges that spark inspiration 
                    and forge connections.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">⇄</span>
                </div>
                <h3 class="feature-title">Evolutionary Path</h3>
                <p class="feature-description">
                    Chart your artistic metamorphosis. Witness how your style blooms and transforms over 
                    time.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">✎</span>
                </div>
                <h3 class="feature-title">Artistic Growth</h3>
                <p class="feature-description">
                    Document your progress and see the evolution of your skills through a beautifully organized timeline.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">⚘</span>
                </div>
                <h3 class="feature-title">Inspiration Hub</h3>
                <p class="feature-description">
                    Find new ideas and perspectives from a community of like-minded creatives passionate about their craft.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <!-- Duplicated Features (exact copy) - This creates the seamless loop -->
            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">✎</span>
                </div>
                <h3 class="feature-title">Curated Showcases</h3>
                <p class="feature-description">
                    Craft a visual symphony of your work, where each piece harmonizes with the next to tell 
                    your unique creative story.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">✦</span>
                </div>
                <h3 class="feature-title">Visual Narratives</h3>
                <p class="feature-description">
                    Transform your process into poetry. Pair images with lyrical descriptions that reveal 
                    the soul behind each creation.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">❂</span>
                </div>
                <h3 class="feature-title">Creative Kinship</h3>
                <p class="feature-description">
                    Discover your creative tribe. Engage in meaningful exchanges that spark inspiration 
                    and forge connections.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">⇄</span>
                </div>
                <h3 class="feature-title">Evolutionary Path</h3>
                <p class="feature-description">
                    Chart your artistic metamorphosis. Witness how your style blooms and transforms over 
                    time.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">✎</span>
                </div>
                <h3 class="feature-title">Artistic Growth</h3>
                <p class="feature-description">
                    Document your progress and see the evolution of your skills through a beautifully organized timeline.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>

            <div class="feature-card">
                <div class="feature-icon bg-primary-light w-12 h-12 rounded-full flex items-center justify-center text-primary mb-4">
                    <span class="text-xl">⚘</span>
                </div>
                <h3 class="feature-title">Inspiration Hub</h3>
                <p class="feature-description">
                    Find new ideas and perspectives from a community of like-minded creatives passionate about their craft.
                </p>
                <!-- Add this highlight indicator to each feature-card -->
    <div class="feature-highlight"></div>
            </div>
        </div>
    </div>
</div>

        <!-- Portfolio Showcase - More elegant with decorative corners -->
        <div class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12 relative corner-decoration">
                    <div class="corner-bottom-right"></div>
                    <span class="star-corner-tl">✦</span>
                    <span class="star-corner-br">✦</span>
                    
                    <h2 class="text-3xl font-bold text-gray-800 dm-serif-text-regular mb-3">
                        <span class="text-primary">Gallery of Inspiration</span>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto tracking-wide">
                        Where creativity takes form and imagination finds its voice
                    </p>
                    <div class="mx-auto w-16 h-px bg-gradient-to-r from-transparent via-primary to-transparent my-4"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Portfolio 1: Mireya Quinn -->
    <div class="portfolio-card bg-white rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md relative hover:-translate-y-1">
        <!-- Decorative Corners -->
        <div class="corner-bottom-right"></div>
        <span class="star-corner-tl absolute top-1 left-1 text-primary opacity-30 text-sm">✦</span>
        <span class="star-corner-br absolute bottom-1 right-1 text-primary opacity-30 text-sm">✦</span>
        
        <div class="h-80 overflow-hidden relative group">
            <img src="{{ asset('images/mireya.jpg') }}" alt="Mireya Quinn" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
        </div>
        
        <div class="p-4 relative">
            <h3 class="text-lg font-bold text-gray-800">The Painter</h3>
            <p class="text-gray-600 text-sm mb-3">by Mireya Quinn</p>
            
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Mixed Media</span>
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Conceptual</span>
            </div>
            
            <a href="#" class="text-primary hover:text-primary-dark text-sm font-medium flex items-center group">
                <span class="group-hover:underline">Discover More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Portfolio 2: Zanele K. Muse -->
    <div class="portfolio-card bg-white rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md relative hover:-translate-y-1">
        <!-- Decorative Corners -->
        <div class="corner-bottom-right"></div>
        <span class="star-corner-tl absolute top-1 left-1 text-primary opacity-30 text-sm">✦</span>
        <span class="star-corner-br absolute bottom-1 right-1 text-primary opacity-30 text-sm">✦</span>
        
        <div class="h-80 overflow-hidden relative group">
            <img src="{{ asset('images/zanele.jpg') }}" alt="Zanele K. Muse" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
        </div>
        
        <div class="p-4 relative">
            <h3 class="text-lg font-bold text-gray-800">The Fabric Whisperer</h3>
            <p class="text-gray-600 text-sm mb-3">by Zanele K. Muse</p>
            
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Textiles</span>
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Wearable Art</span>
            </div>
            
            <a href="#" class="text-primary hover:text-primary-dark text-sm font-medium flex items-center group">
                <span class="group-hover:underline">Discover More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Portfolio 3: Cassien Vale -->
    <div class="portfolio-card bg-white rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md relative hover:-translate-y-1">
        <!-- Decorative Corners -->
        <div class="corner-bottom-right"></div>
        <span class="star-corner-tl absolute top-1 left-1 text-primary opacity-30 text-sm">✦</span>
        <span class="star-corner-br absolute bottom-1 right-1 text-primary opacity-30 text-sm">✦</span>
        
        <div class="h-80 overflow-hidden relative group">
            <img src="{{ asset('images/cassien.jpg') }}" alt="Cassien Vale" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
        </div>
        
        <div class="p-4 relative">
            <h3 class="text-lg font-bold text-gray-800">The Sonic Cartographer</h3>
            <p class="text-gray-600 text-sm mb-3">by Cassien Vale</p>
            
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Sound Design</span>
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Ambient</span>
            </div>
            
            <a href="#" class="text-primary hover:text-primary-dark text-sm font-medium flex items-center group">
                <span class="group-hover:underline">Discover More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Portfolio 4: Leif Ono -->
    <div class="portfolio-card bg-white rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md relative hover:-translate-y-1">
        <!-- Decorative Corners -->
        <div class="corner-bottom-right"></div>
        <span class="star-corner-tl absolute top-1 left-1 text-primary opacity-30 text-sm">✦</span>
        <span class="star-corner-br absolute bottom-1 right-1 text-primary opacity-30 text-sm">✦</span>
        
        <div class="h-80 overflow-hidden relative group">
            <img src="{{ asset('images/leif.jpg') }}" alt="Leif Ono" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
        </div>
        
        <div class="p-4 relative">
            <h3 class="text-lg font-bold text-gray-800">The Mythmaker</h3>
            <p class="text-gray-600 text-sm mb-3">by Leif Ono</p>
            
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Writing</span>
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Animation</span>
            </div>
            
            <a href="#" class="text-primary hover:text-primary-dark text-sm font-medium flex items-center group">
                <span class="group-hover:underline">Discover More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Portfolio 5: Nova Adebayo -->
    <div class="portfolio-card bg-white rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md relative hover:-translate-y-1">
        <!-- Decorative Corners -->
        <div class="corner-bottom-right"></div>
        <span class="star-corner-tl absolute top-1 left-1 text-primary opacity-30 text-sm">✦</span>
        <span class="star-corner-br absolute bottom-1 right-1 text-primary opacity-30 text-sm">✦</span>
        
        <div class="h-80 overflow-hidden relative group">
            <img src="{{ asset('images/nova.jpg') }}" alt="Nova Adebayo" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
        </div>
        
        <div class="p-4 relative">
            <h3 class="text-lg font-bold text-gray-800">The Interface Poet</h3>
            <p class="text-gray-600 text-sm mb-3">by Nova Adebayo</p>
            
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Interactive</span>
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Digital Art</span>
            </div>
            
            <a href="#" class="text-primary hover:text-primary-dark text-sm font-medium flex items-center group">
                <span class="group-hover:underline">Discover More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Portfolio 6: Elio Strauss -->
    <div class="portfolio-card bg-white rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md relative hover:-translate-y-1">
        <!-- Decorative Corners -->
        <div class="corner-bottom-right"></div>
        <span class="star-corner-tl absolute top-1 left-1 text-primary opacity-30 text-sm">✦</span>
        <span class="star-corner-br absolute bottom-1 right-1 text-primary opacity-30 text-sm">✦</span>
        
        <div class="h-80 overflow-hidden relative group">
            <img src="{{ asset('images/elio.jpg') }}" alt="Elio Strauss" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
        </div>
        
        <div class="p-4 relative">
            <h3 class="text-lg font-bold text-gray-800">The Digital Forager</h3>
            <p class="text-gray-600 text-sm mb-3">by Elio Strauss</p>
            
            <div class="flex flex-wrap gap-2 mb-3">
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Digital Collage</span>
                <span class="text-xs bg-primary-light text-primary px-2 py-1 rounded-full">Archival</span>
            </div>
            
            <a href="#" class="text-primary hover:text-primary-dark text-sm font-medium flex items-center group">
                <span class="group-hover:underline">Discover More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:translate-x-1 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
                </div>

                <div class="text-center mt-10">
                    <a href="{{ route('portfolios.index') }}" class="inline-flex items-center text-primary hover:text-primary-dark font-medium group">
                        <span class="group-hover:underline">Wander the Gallery</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 transform group-hover:translate-x-2 transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Add a proper divider between Portfolio and CTA -->
<div class="wave-divider transform rotate-180 no-reveal">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
    </svg>
</div>

        <!-- CTA Section with animated waves -->
<div class="py-20 relative overflow-hidden cta-ocean-section" style="position: relative; z-index: 1;">
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
        <!-- Rest of the CTA content remains the same -->
        <h2 class="text-3xl md:text-4xl font-bold text-white dm-serif-text-regular mb-6 fade-in-up text-shadow">
            Ready to Begin Your Creative Voyage?
        </h2>
        <p class="text-xl text-white/90 max-w-2xl mx-auto mb-10 leading-relaxed fade-in-up text-shadow" style="transition-delay: 0.2s;">
            Join a community where art breathes, ideas flourish, and creativity knows no bounds.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center fade-in-up" style="transition-delay: 0.4s;">
            <a href="/register" class="bg-white hover:bg-gray-100 text-primary font-semibold py-3 px-10 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);">
                Set Sail
            </a>
            <a href="/about" class="bg-transparent hover:bg-white/10 text-white font-semibold py-3 px-10 rounded-full border-2 border-white transition-all duration-300 transform hover:scale-105" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);">
    Learn the Lore
</a>
        </div>
    </div>
</div>
    </div>

    <!-- JavaScript for interactive elements -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize scroll animations
            const fadeElements = document.querySelectorAll('.fade-in-up');
            
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
            
            // Initialize floating elements
            const floatingElements = document.querySelectorAll('.floating-element');
            floatingElements.forEach(element => {
                // Random delay for more natural animation
                const delay = Math.random() * 5;
                element.style.animationDelay = `${delay}s`;
            });
        });

        // Interactive floating elements
        document.addEventListener('DOMContentLoaded', function() {
            const floatElements = document.querySelectorAll('.hero-float-element');
            const heroSection = document.querySelector('.hero-split-section');
            
            if (heroSection && floatElements.length) {
                heroSection.addEventListener('mousemove', function(e) {
                    // Get mouse position relative to hero section
                    const rect = heroSection.getBoundingClientRect();
                    const mouseX = e.clientX - rect.left;
                    const mouseY = e.clientY - rect.top;
                    
                    // Calculate center points
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    // Calculate offsets from center (as percentage)
                    const offsetX = (mouseX - centerX) / centerX;
                    const offsetY = (mouseY - centerY) / centerY;
                    
                    // Apply different movement speeds to each element
                    floatElements.forEach((element, index) => {
                        const speed = 10 + (index * 5);
                        const x = offsetX * speed;
                        const y = offsetY * speed;
                        element.style.transform = `translate(${x}px, ${y}px)`;
                    });
                });
            }
        });

        // Button ripple effect
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.hero-button, .portfolio-card a, a[href="/create-portfolio"]');
            
            buttons.forEach(button => {
                button.classList.add('btn-ripple');
                
                button.addEventListener('click', function(e) {
                    const x = e.clientX - e.target.getBoundingClientRect().left;
                    const y = e.clientY - e.target.getBoundingClientRect().top;
                    
                    const ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });

        // Reveal sections on scroll - MODIFIED to properly exclude no-reveal elements
        document.addEventListener('DOMContentLoaded', function() {
            const revealSections = document.querySelectorAll('.page-title-container, .py-16, .wave-divider:not(.no-reveal), .symbol-divider');
            
            const revealOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const revealObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, revealOptions);
            
            revealSections.forEach(section => {
                // Don't add reveal class to elements that have no-reveal
                if (!section.classList.contains('no-reveal')) {
                    section.classList.add('reveal-section');
                    revealObserver.observe(section);
                }
            });
        });
    </script>
@endsection