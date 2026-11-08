/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    navy: '#0f172a',
                    slate: '#1e293b',
                    orange: '#f97316',
                    orangeDark: '#ea580c',
                    orangeHover: '#c2410c',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                },
            },
            spacing: {
                '18': '4.5rem',
                '22': '5.5rem',
            },
            fontFamily: {
                sans: ['Plus Jakarta Sans', 'Cairo', 'Inter', 'sans-serif'],
                display: ['Space Grotesk', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
