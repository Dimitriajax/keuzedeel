const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pink: '#E2539F',
                base: '#F2F2F2',
                yellow: '#E8D155',
                green: '#8AFF67',
                blue: '#40EEEE'
            }
        },
        plugins: [require('@tailwindcss/forms')],
    }
}
