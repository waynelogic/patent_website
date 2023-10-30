/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: process.env.NODE_ENV ? 'jit' : undefined,
    content: [
        "./layouts/**/*.htm",
        "./pages/**/*.htm",
        "./partials/**/*.htm",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['TT Commons','sans-serif', 'system-ui'],
            },
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '8rem',
                '2xl': '12rem',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
