<!-- Side Navigation Toggle - Moved from home.blade.php -->
<button class="nav-toggle" id="navToggle" aria-label="Menu">
    <span class="transform transition duration-300 ease-in-out"></span>
    <span class="transform transition duration-300 ease-in-out"></span>
    <span class="transform transition duration-300 ease-in-out"></span>
</button>

<!-- Side Navigation - Moved from home.blade.php -->
<div class="side-nav" id="sideNav" style="left: -18rem; transition: left 0.4s ease;">
    <img src="{{ asset('images/flowers_nav.jpg') }}" class="">
    <div class="nav-links">
        <ul>
            <li class="group">
                <a href="{{ url('/') }}" class="flex items-center {{ request()->is('/') ? 'text-primary' : '' }}">
                    <span class="mr-3 opacity-0 group-hover:opacity-100 transition-all duration-300">✦</span>
                    <span>Home</span>
                </a>
            </li>
            <li class="group">
                <a href="{{ url('/portfolios') }}" class="flex items-center {{ request()->is('portfolios*') ? 'text-primary' : '' }}">
                    <span class="mr-3 opacity-0 group-hover:opacity-100 transition-all duration-300">✦</span>
                    <span>Portfolios</span>
                </a>
            </li>
            <li class="group">
                <a href="#" class="flex items-center {{ request()->is('about*') ? 'text-primary' : '' }}">
                    <span class="mr-3 opacity-0 group-hover:opacity-100 transition-all duration-300">✦</span>
                    <span>About</span>
                </a>
            </li>
            <li class="group">
                <a href="#" class="flex items-center {{ request()->is('blog*') ? 'text-primary' : '' }}">
                    <span class="mr-3 opacity-0 group-hover:opacity-100 transition-all duration-300">✦</span>
                    <span>Blog</span>
                </a>
            </li>
            <li class="group">
                <a href="#" class="flex items-center {{ request()->is('contact*') ? 'text-primary' : '' }}">
                    <span class="mr-3 opacity-0 group-hover:opacity-100 transition-all duration-300">✦</span>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="nav-footer">
        <p class="text-xs tracking-wider">Where creativity finds its canvas</p>
        <p class="text-xs mt-1">&copy; {{ date('Y') }} Truki Lite. All rights reserved.</p>
    </div>
</div>

<nav class="navbar">
    <!-- Add starry background -->
    <div class="navbar-stars">
        <div class="navbar-star navbar-star-1">✦</div>
        <div class="navbar-star navbar-star-2">✧</div>
        <div class="navbar-star navbar-star-3">✦</div>
        <div class="navbar-star navbar-star-4">✧</div>
        <div class="navbar-star navbar-star-5">✦</div>
        <div class="navbar-star navbar-star-6">✧</div>
    </div>
    
    <div class="navbar-container">
        <div class="navbar-content">
            <!-- Logo with decorative elements -->
            <div class="navbar-logo">
                <a href="{{ url('/') }}" class="navbar-logo-link group">
                    <!-- Star decoration -->
                    <span class="logo-star-left">✦</span>
                    
                    <div class="navbar-logo-wrapper">
                        <span class="navbar-logo-text">Truki</span>
                        <span class="navbar-logo-subtext">Lite</span>
                        <span class="navbar-logo-shimmer"></span>
                    </div>
                    
                    <!-- Star decoration -->
                    <span class="logo-star-right">✦</span>
                </a>
            </div>

            <!-- Navigation Links with star animation -->
            <div class="navbar-links">
                <a href="{{ url('/') }}" class="navbar-link group {{ request()->is('/') ? 'active' : '' }}">
                    <span class="navbar-link-text">Home</span>
                    <span class="navbar-link-underline"></span>
                    <span class="navbar-link-star">✦</span>
                </a>
                <a href="{{ url('/portfolios') }}" class="navbar-link group {{ request()->is('portfolios*') ? 'active' : '' }}">
                    <span class="navbar-link-text">Portfolios</span>
                    <span class="navbar-link-underline"></span>
                    <span class="navbar-link-star">✦</span>
                </a>
                <a href="#" class="navbar-link group {{ request()->is('about*') ? 'active' : '' }}">
                    <span class="navbar-link-text">About</span>
                    <span class="navbar-link-underline"></span>
                    <span class="navbar-link-star">✦</span>
                </a>
                <a href="#" class="navbar-link group {{ request()->is('contact*') ? 'active' : '' }}">
                    <span class="navbar-link-text">Contact</span>
                    <span class="navbar-link-underline"></span>
                    <span class="navbar-link-star">✦</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="navbar-mobile-toggle">
                <button class="mobile-menu-button" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mobile-menu-line"></span>
                    <span class="mobile-menu-line"></span>
                    <span class="mobile-menu-line"></span>
                    <span class="mobile-menu-star">✦</span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Gradient border at bottom -->
    <div class="navbar-border-gradient"></div>
    
    <!-- Mobile Menu (dropdown) -->
    <div class="navbar-mobile-menu">
        <a href="{{ url('/') }}" class="navbar-mobile-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/portfolios') }}" class="navbar-mobile-link {{ request()->is('portfolios*') ? 'active' : '' }}">Portfolios</a>
        <a href="#" class="navbar-mobile-link {{ request()->is('about*') ? 'active' : '' }}">About</a>
        <a href="#" class="navbar-mobile-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("DOM loaded - initializing side navigation");
        
        // Side navigation functionality
        const navToggle = document.getElementById('navToggle');
        const sideNav = document.getElementById('sideNav');
        
        if (!navToggle || !sideNav) {
            console.error("Navigation elements not found!");
            return;
        }
        
        console.log("Navigation elements found, adding event listeners");
        
        // Function to open side nav
        function openSideNav() {
            sideNav.style.left = "0";
            navToggle.classList.add('open');
            sideNav.classList.add('open');
            document.body.classList.add('shifted');
            console.log("Side nav opened");
        }
        
        // Function to close side nav
        function closeSideNav() {
            sideNav.style.left = "-18rem";
            navToggle.classList.remove('open');
            sideNav.classList.remove('open');
            document.body.classList.remove('shifted');
            console.log("Side nav closed");
        }
        
        // Toggle side navigation when clicking the button
        navToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            console.log("Toggle button clicked");
            
            if (sideNav.classList.contains('open')) {
                closeSideNav();
            } else {
                openSideNav();
            }
        });
        
        // Close side nav when clicking anywhere else on the page
        document.addEventListener('click', function(event) {
            if (sideNav.classList.contains('open')) {
                const isClickInsideNav = sideNav.contains(event.target);
                const isClickOnToggle = navToggle.contains(event.target);
                
                if (!isClickInsideNav && !isClickOnToggle) {
                    closeSideNav();
                }
            }
        });
        
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector(".mobile-menu-button");
        const mobileMenu = document.querySelector(".navbar-mobile-menu");
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener("click", function(e) {
                e.stopPropagation();
                const isExpanded = this.getAttribute("aria-expanded") === "true";
                this.setAttribute("aria-expanded", !isExpanded);
                mobileMenu.classList.toggle("open");
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener("click", function(event) {
                if (
                    !event.target.closest(".navbar-mobile-toggle") &&
                    !event.target.closest(".navbar-mobile-menu") &&
                    mobileMenu.classList.contains("open")
                ) {
                    mobileMenuButton.setAttribute("aria-expanded", "false");
                    mobileMenu.classList.remove("open");
                }
            });
        }
    });
</script>

<style>
    /* Inline styles to ensure functionality */
    body {
        transition: margin-left 0.4s ease;
        margin-left: 0;
        overflow-x: hidden;
    }
    
    body.shifted {
        margin-left: 18rem !important;
    }
    
    .nav-toggle {
        z-index: 60;
        transition: left 0.4s ease;
    }
    
    .nav-toggle.open span:nth-child(1) {
        transform: translateY(9px) rotate(45deg);
    }
    
    .nav-toggle.open span:nth-child(2) {
        opacity: 0;
        transform: translateX(-10px);
    }
    
    .nav-toggle.open span:nth-child(3) {
        transform: translateY(-9px) rotate(-45deg);
    }
    
    .navbar, .navbar-container, .navbar-content, 
    .footer-container, .starry-footer {
        transition: margin-left 0.4s ease;
    }
</style>

@push('scripts')
<script>
    // This is a fallback script in case the inline one doesn't execute for some reason
    document.addEventListener("DOMContentLoaded", function() {
        // Script duplicated here for redundancy
    });
</script>
@endpush