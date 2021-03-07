module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ["Roboto", "sans-serif"],
            serif: ["Merriweather", "serif"],
        },
        extend: {
             width:{
            '96':'24rem'
        }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
