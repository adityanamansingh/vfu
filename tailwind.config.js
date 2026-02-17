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
            },
            colors: {
                brand: {
                    blue: '#008fe9',
                    'blue-100': '#e1f3ff',
                    violet: '#5a0dd3',
                    'violet-100': '#f4eeff',
                    pink: '#df007e',
                    'pink-100': '#fffef8',
                    black: '#000000',
                    white: '#ffffff',
                },
            },
            backgroundImage: {
                'blue-purple-pink': 'linear-gradient(90deg, #008fe9 0%, #5a0dd3 50%, #df007e 100%)',
            },
        },
    },

    plugins: [forms],
};
