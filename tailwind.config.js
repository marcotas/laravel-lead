const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                    DEFAULT: '#2A669F',
                    '50': '#E4F7F8',
                    '100': '#CCEEF2',
                    '200': '#9CD7E5',
                    '300': '#6CB9D8',
                    '400': '#3B94CB',
                    '500': '#2A669F',
                    '600': '#234B83',
                    '700': '#1B3366',
                    '800': '#14204A',
                    '900': '#0C102E',
                },
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
