@extends('layouts.app')

@section('title', 'Create Portfolio')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/portfolios/create.css') }}">
@endsection

@section('content')
    <div class="portfolio-create-container">
        <h1 class="portfolio-create-title dm-serif-text-regular">Create Your Portfolio</h1>

        <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data" class="portfolio-form space-y-6">
            @csrf

            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" name="title" required
                       class="form-input" placeholder="What would you like to call your portfolio?">
            </div>

            <div class="form-group">
                <label class="form-label">Content</label>
                <textarea name="content" rows="5" required
                          class="form-textarea" placeholder="Tell the story of your creative work..."></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Upload Image</label>
                <div class="file-input-wrapper">
                    <input type="file" name="media" class="custom-file-input" id="mediaFile">
                    <label for="mediaFile" class="file-input-label">Choose an image file...</label>
                </div>
            </div>

            <button type="submit" class="submit-button">
                Create Portfolio
            </button>
        </form>
        
        <!-- Decorative stars -->
        <div class="form-stars">
            <div class="form-star form-star-1">✦</div>
            <div class="form-star form-star-2">✦</div>
            <div class="form-star form-star-3">✦</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Custom file input
            const fileInput = document.querySelector('.custom-file-input');
            const fileLabel = document.querySelector('.file-input-label');
            
            if (fileInput && fileLabel) {
                fileInput.addEventListener('change', function() {
                    if (this.files && this.files.length > 0) {
                        fileLabel.textContent = this.files[0].name;
                    } else {
                        fileLabel.textContent = 'Choose an image file...';
                    }
                });
            }
            
            // Submit button animation
            const submitButton = document.querySelector('.submit-button');
            if (submitButton) {
                submitButton.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                });
                
                submitButton.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            }
        });
    </script>
@endsection