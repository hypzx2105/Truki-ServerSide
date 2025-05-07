@extends('layouts.app')

@section('title', $portfolio->title)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/portfolios/show.css') }}">
@endsection

@section('content')
    <div class="portfolio-wrapper">
        <div class="portfolio-show-container">
            <div class="portfolio-card">
                <div class="portfolio-header">
                    <h1 class="portfolio-title dm-serif-text-regular">{{ $portfolio->title }}</h1>
                    <p class="portfolio-author">by Creative Artist</p>
                    
                    <!-- Corner stars -->
                    <span class="portfolio-corner-star portfolio-corner-tl">✦</span>
                    <span class="portfolio-corner-star portfolio-corner-br">✦</span>
                </div>

                @if ($portfolio->media_url)
                    <div class="portfolio-image-container">
                        <img src="{{ asset('storage/' . $portfolio->media_url) }}" alt="{{ $portfolio->title }}" class="portfolio-image">
                        <div class="portfolio-image-overlay"></div>
                    </div>
                @endif

                <div class="portfolio-content">
                    <p class="portfolio-text">
                        {{ $portfolio->content }}
                    </p>

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
                </div>
            </div>
            
            <!-- Floating elements -->
            <div class="portfolio-floating-elements">
                <div class="portfolio-float portfolio-float-1">✦</div>
                <div class="portfolio-float portfolio-float-2">✦</div>
                <div class="portfolio-float portfolio-float-3"></div>
                <div class="portfolio-float portfolio-float-4"></div>
            </div>
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
            // Initialize floating elements that follow mouse
            const container = document.querySelector('.portfolio-show-container');
            const floats = document.querySelectorAll('.portfolio-float');
            
            if (container && floats.length) {
                container.addEventListener('mousemove', function(e) {
                    // Get mouse position relative to container
                    const rect = container.getBoundingClientRect();
                    const mouseX = e.clientX - rect.left;
                    const mouseY = e.clientY - rect.top;
                    
                    // Calculate center points
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    // Calculate offsets from center (as percentage)
                    const offsetX = (mouseX - centerX) / centerX;
                    const offsetY = (mouseY - centerY) / centerY;
                    
                    // Apply different movement speeds to each element
                    floats.forEach((element, index) => {
                        const speed = 15 + (index * 5);
                        const x = offsetX * speed;
                        const y = offsetY * speed;
                        element.style.transform = `translate(${x}px, ${y}px)`;
                    });
                });
                
                // Reset positions when mouse leaves
                container.addEventListener('mouseleave', function() {
                    floats.forEach(element => {
                        element.style.transform = 'translate(0, 0)';
                    });
                });
            }
            
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
    </script>
@endsection