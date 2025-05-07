@extends('layouts.app')

@section('title', 'Portfolios')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/portfolios/index.css') }}">
@endsection

@section('content')
    <div class="portfolio-index-container">
        <form method="GET" action="{{ route('portfolios.index') }}" class="portfolio-search">
    <input type="text" name="search" placeholder="Search portfolios by title or content..." 
           value="{{ request('search') }}" class="portfolio-search-input">
    <span class="portfolio-search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="M21 21l-4.35-4.35"></path>
        </svg>
    </span>
</form>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if($portfolios->count())
            <div class="portfolio-grid">
                @foreach($portfolios as $portfolio)
                    <div class="portfolio-grid-card">
                        @if($portfolio->media_url)
                            <div class="portfolio-card-image-container">
                                <img src="{{ asset('storage/' . $portfolio->media_url) }}" 
                                     alt="{{ $portfolio->title }}" class="portfolio-card-image">
                                <div class="portfolio-card-image-overlay"></div>
                            </div>
                        @endif
                        
                        <div class="portfolio-card-content">
                            <h2 class="portfolio-card-title">
                                <a href="{{ route('portfolios.show', $portfolio) }}">{{ $portfolio->title }}</a>
                            </h2>
                            
                            <p class="portfolio-card-text">{{ $portfolio->content }}</p>
                            
                            <div class="portfolio-card-actions">
                                <a href="{{ route('portfolios.show', $portfolio) }}" 
                                   class="portfolio-card-btn portfolio-card-btn-view">
                                    View
                                </a>
                                
                                <a href="{{ route('portfolios.edit', $portfolio) }}" 
                                   class="portfolio-card-btn portfolio-card-btn-edit">
                                    Edit
                                </a>
                                
                                <button type="button" class="portfolio-card-btn portfolio-card-btn-delete" 
                                        onclick="showDeleteModal('{{ $portfolio->id }}')">
                                    Delete
                                </button>
                                
                                <form id="delete-form-{{ $portfolio->id }}" 
                                      action="{{ route('portfolios.destroy', $portfolio) }}" 
                                      method="POST" 
                                      style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                No portfolios found. Create your first portfolio to get started!
            </div>
        @endif

        <div class="text-center mt-8">
            <a href="{{ route('portfolios.create') }}" class="create-portfolio-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5v14M5 12h14"></path>
                </svg>
                Create New Portfolio
            </a>
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
                    <button class="portfolio-modal-btn portfolio-modal-btn-cancel" onclick="hideDeleteModal()">Cancel</button>
                    <button class="portfolio-modal-btn portfolio-modal-btn-confirm" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fade in cards
            const cards = document.querySelectorAll('.portfolio-grid-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 * index);
            });
            
            // Success message animation
            const successMessage = document.querySelector('.success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.opacity = '0';
                    successMessage.style.transform = 'translateY(-20px)';
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 500);
                }, 5000);
            }
        });
        
        // Current portfolio ID to delete
        let currentPortfolioId = null;
        
        // Show delete confirmation modal
        function showDeleteModal(portfolioId) {
            currentPortfolioId = portfolioId;
            const modal = document.getElementById('deleteModal');
            modal.classList.add('active');
            
            // Set up confirm button
            const confirmBtn = document.getElementById('confirmDeleteBtn');
            confirmBtn.onclick = function() {
                document.getElementById(`delete-form-${currentPortfolioId}`).submit();
            };
        }
        
        // Hide delete confirmation modal
        function hideDeleteModal() {
            const modal = document.getElementById('deleteModal');
            modal.classList.remove('active');
        }
        
        // Close modal when clicking outside
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                hideDeleteModal();
            }
        });
    </script>
@endsection