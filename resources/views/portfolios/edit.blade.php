@extends('layouts.app')

@section('title', 'Edit Portfolio')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/portfolios/create.css') }}">
    <style>
        /* Additional styles for the current image */
        .current-image-container {
            margin-top: 0.5rem;
            border-radius: 0.5rem;
            overflow: hidden;
            max-width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .current-image {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        
        .current-image-container:hover .current-image {
            transform: scale(1.03);
        }
        
        .current-image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(43, 108, 176, 0), rgba(43, 108, 176, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .current-image-container:hover::after {
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="portfolio-create-container">
        <h1 class="portfolio-create-title dm-serif-text-regular">Edit Your Portfolio</h1>

        <form method="POST" action="{{ route('portfolios.update', $portfolio) }}" enctype="multipart/form-data" class="portfolio-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" 
                       class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Content</label>
                <textarea name="content" rows="5" class="form-textarea" required>{{ old('content', $portfolio->content) }}</textarea>
            </div>

            @if ($portfolio->media_url)
                <div class="form-group">
                    <label class="form-label">Current Image</label>
                    <div class="current-image-container">
                        <img src="{{ asset('storage/' . $portfolio->media_url) }}" 
                             alt="Current Image" 
                             class="current-image">
                    </div>
                </div>
            @endif

            <div class="form-group">
                <label class="form-label">Replace Image (optional)</label>
                <div class="file-input-wrapper">
                    <input type="file" name="media" accept="image/*" id="mediaFile" class="custom-file-input">
                    <label for="mediaFile" class="file-input-label">Choose a new image file...</label>
                </div>
            </div>

            <button type="submit" class="submit-button">
                Update Portfolio
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
                        fileLabel.textContent = 'Choose a new image file...';
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
            
            // Image hover effect
            const imageContainer = document.querySelector('.current-image-container');
            if (imageContainer) {
                imageContainer.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 10px 15px rgba(43, 108, 176, 0.2)';
                });
                
                imageContainer.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                });
            }
        });
    </script>
@endsection