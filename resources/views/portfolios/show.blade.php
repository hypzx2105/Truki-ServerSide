@extends('layouts.app')

@section('title', $portfolio->title)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/portfolios/create.css') }}">
    <style>
        /* Additional styles for the show page */
        .portfolio-header {
            margin-bottom: 1.5rem;
        }
        
        .portfolio-create-title {
            margin-bottom: 0.25rem;
        }
        
        .portfolio-author {
            color: #4a5568;
            font-size: 1.1rem;
            font-style: italic;
            margin-top: 0.5rem;
        }
        
        .portfolio-text {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 2.5rem;
        }
        
        .portfolio-text::first-letter {
            font-size: 2.5rem;
            font-family: "DM Serif Text", serif;
            float: left;
            line-height: 1;
            padding-right: 8px;
            color: #2b6cb0;
        }
        
        .portfolio-image-container {
            margin: 2rem 0;
            border-radius: 0.5rem;
            overflow: hidden;
            max-width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .portfolio-image {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
            object-fit: contain;
        }
        
        .portfolio-image:hover {
            transform: scale(1.02);
        }
        
        .portfolio-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2.5rem;
        }
        
        .portfolio-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border: none;
        }
        
        .portfolio-btn-edit {
            background-color: #f6e05e;
            color: #744210;
        }
        
        .portfolio-btn-edit:hover {
            background-color: #ecc94b;
            transform: translateY(-2px);
        }
        
        .portfolio-btn-delete {
            background-color: #fc8181;
            color: #742a2a;
        }
        
        .portfolio-btn-delete:hover {
            background-color: #f56565;
            transform: translateY(-2px);
        }
        
        .portfolio-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #2b6cb0;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 2rem;
            text-decoration: none;
        }

        .portfolio-back:hover {
            color: #1e4e8c;
        }

        .portfolio-back:hover svg {
            transform: translateX(-3px);
        }

        /* Delete confirmation modal styling */
        .portfolio-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 50;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .portfolio-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .portfolio-modal {
            width: 100%;
            max-width: 400px;
            background-color: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: scale(0.95);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .portfolio-modal-overlay.active .portfolio-modal {
            transform: scale(1);
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="portfolio-create-container">
        <div class="portfolio-header">
            <h1 class="portfolio-create-title dm-serif-text-regular">{{ $portfolio->title }}</h1>
            <p class="portfolio-author">by Creative Artist</p>
        </div>

        @if ($portfolio->media_url)
            <div class="portfolio-image-container" style="margin-bottom: 2rem;">
    <img src="{{ asset('storage/' . $portfolio->media_url) }}" 
         alt="{{ $portfolio->title }}" 
         class="portfolio-image">
</div>
        @endif
        
        <div class="portfolio-text">
            {{ $portfolio->content }}
        </div>

        <div class="portfolio-actions">
            <a href="{{ route('portfolios.edit', $portfolio) }}"
               class="portfolio-btn portfolio-btn-edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                </svg>
                Edit Portfolio
            </a>

            <button type="button" class="portfolio-btn portfolio-btn-delete" id="deleteBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 6h18"></path>
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                </svg>
                Delete Portfolio
            </button>

            <form id="deleteForm" action="{{ route('portfolios.destroy', $portfolio) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>

        <a href="{{ route('portfolios.index') }}"
           class="portfolio-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5"></path>
                <path d="M12 19l-7-7 7-7"></path>
            </svg>
            Back to Portfolios
        </a>
        
        <!-- Decorative stars -->
        <div class="form-stars">
            <div class="form-star form-star-1">✦</div>
            <div class="form-star form-star-2">✦</div>
            <div class="form-star form-star-3">✦</div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="portfolio-modal-overlay" id="deleteModal">
        <div class="portfolio-modal">
            <div class="portfolio-modal-header">
                <div class="portfolio-modal-icon">!</div>
                <h3 class="portfolio-modal-title">Confirm Deletion</h3>
            </div>
            <div class="portfolio-modal-content">
                <p class="portfolio-modal-message">
                    Are you sure you want to delete this portfolio? 
                    This action cannot be undone.
                </p>
                <div class="portfolio-modal-actions">
                    <button class="portfolio-modal-btn portfolio-modal-btn-cancel" id="cancelDelete">Cancel</button>
                    <button class="portfolio-modal-btn portfolio-modal-btn-confirm" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete confirmation modal
            const deleteBtn = document.getElementById('deleteBtn');
            const deleteModal = document.getElementById('deleteModal');
            const cancelDelete = document.getElementById('cancelDelete');
            const confirmDelete = document.getElementById('confirmDelete');
            const deleteForm = document.getElementById('deleteForm');
            
            if (deleteBtn && deleteModal && cancelDelete && confirmDelete && deleteForm) {
                // Show modal when delete button is clicked
                deleteBtn.addEventListener('click', function() {
                    deleteModal.classList.add('active');
                });
                
                // Hide modal when cancel button is clicked
                cancelDelete.addEventListener('click', function() {
                    deleteModal.classList.remove('active');
                });
                
                // Submit form when confirm button is clicked
                confirmDelete.addEventListener('click', function() {
                    deleteForm.submit();
                });
                
                // Close modal when clicking outside
                deleteModal.addEventListener('click', function(e) {
                    if (e.target === deleteModal) {
                        deleteModal.classList.remove('active');
                    }
                });
            }
        });

        // Add this JavaScript to your show.blade.php file inside the script tag

document.addEventListener('DOMContentLoaded', function() {
    // 1. Add floating stars background to the portfolio container
    const portfolioContainer = document.querySelector('.portfolio-create-container');
    
    // Create floating stars
    const starSymbols = ['✦', '✧', '✺', '✲', '❂'];
    for (let i = 0; i < 8; i++) {
        const star = document.createElement('div');
        star.className = 'portfolio-floating-star';
        star.textContent = starSymbols[Math.floor(Math.random() * starSymbols.length)];
        
        // Random position
        star.style.top = Math.random() * 100 + '%';
        star.style.left = Math.random() * 100 + '%';
        
        // Random animation delay
        star.style.animationDelay = (Math.random() * 5) + 's';
        
        // Random size
        const size = 0.8 + Math.random() * 1.2;
        star.style.fontSize = size + 'rem';
        
        portfolioContainer.appendChild(star);
    }
    
    // 2. Add slight parallax effect when scrolling
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const stars = document.querySelectorAll('.portfolio-floating-star');
        
        stars.forEach((star, index) => {
            const speed = 0.05 + (index * 0.01);
            const yPos = scrollPosition * speed;
            star.style.transform = `translateY(${yPos}px) rotate(${scrollPosition * 0.02}deg)`;
        });
    });
    
    // 3. Add hover interaction for the image
    const portfolioImage = document.querySelector('.portfolio-image');
    if (portfolioImage) {
        portfolioImage.addEventListener('mousemove', function(e) {
            const rect = portfolioImage.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            
            portfolioImage.style.transform = `scale(1.03) rotateX(${y * -5}deg) rotateY(${x * 5}deg)`;
        });
        
        portfolioImage.addEventListener('mouseleave', function() {
            portfolioImage.style.transform = 'scale(1) rotateX(0) rotateY(0)';
        });
    }
});
    </script>
@endsection