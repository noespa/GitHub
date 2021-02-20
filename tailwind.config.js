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
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
