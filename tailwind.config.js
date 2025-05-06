import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                // Add these new font families
                'roboto-condensed': ['Roboto Condensed', 'sans-serif'],
                'dm-serif': ['DM Serif Text', 'serif'],
                'meie-script': ['Meie Script', 'cursive'],
            },
            // Add Truki Lite custom colors
            colors: {
                'primary': '#6a1b9a',
                'primary-dark': '#4a148c',
                'primary-light': '#f3e5f5',
            },
        },
    },

    plugins: [forms],
};