module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            spacing: {
                '72': '18rem',
                '128': '32rem',
                '160': '40rem',
            },
            colors: {
                'chateau-green': {
                    '50': '#f4faf6',
                    '100': '#eaf5ed',
                    '200': '#cae5d2',
                    '300': '#abd5b7',
                    '400': '#6bb681',
                    '500': '#2c974b',
                    '600': '#288844',
                    '700': '#217138',
                    '800': '#1a5b2d',
                    '900': '#164a25'
                },
                'orange': '#ff2d20',
            },
        },
    },
    variants: {
        extend: {
            scale: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
            transform: ['hover', 'focus', 'group-hover'],
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
