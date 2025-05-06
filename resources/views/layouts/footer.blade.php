<footer class="starry-footer">
    <div class="starry-sky">
        <!-- Decorative stars -->
        <div class="star star-1">✦</div>
        <div class="star star-2">✦</div>
        <div class="star star-3">✧</div>
        <div class="star star-4">✦</div>
        <div class="star star-5">✧</div>
        <div class="star star-6">✦</div>
        <div class="star star-7">✧</div>
        <div class="star star-8">✦</div>
    </div>

    <div class="footer-container">
        <div class="footer-main">
            <!-- Logo area -->
            <div class="footer-logo">
                <a href="{{ url('/') }}" class="footer-logo-link">
                    <span class="footer-logo-text">Truki</span>
                    <span class="footer-logo-subtext">Lite</span>
                </a>
                <div class="footer-tagline">Where creativity finds its canvas</div>
            </div>

            <!-- Navigation links -->
            <div class="footer-links">
                <div class="footer-links-column">
                    <h3 class="footer-heading">Navigation</h3>
                    <a href="{{ url('/') }}" class="footer-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="#" class="footer-link {{ request()->is('about*') ? 'active' : '' }}">About</a>
                </div>
                
                <div class="footer-links-column">
                    <h3 class="footer-heading">Explore</h3>
                    <a href="{{ url('/portfolios') }}" class="footer-link {{ request()->is('portfolios*') ? 'active' : '' }}">Portfolios</a>
                    <a href="#" class="footer-link {{ request()->is('contact*') ? 'active' : '' }}">Contact</a>
                </div>

                <div class="footer-links-column">
                    <h3 class="footer-heading">Connect</h3>
                    <a href="https://github.com/hypzx2105/Truki-ServerSide" class="footer-link" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom copyright bar -->
    <div class="footer-bottom">
        <div class="footer-container footer-copyright">
            <div>© {{ date('Y') }} Truki Lite. All rights reserved.</div>
        </div>
    </div>
</footer>