/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                gray: {
                    901: "#AFAFAF",
                    902: "#DCDCDC",
                },
                blue: {
                    901: "#0661B0",
                },
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                roboto: ["Roboto", "sans-serif"],
            },
            spacing: {
                75: "18..75rem",
                95: "28.875rem",
                102: "32.188rem",
            },
        },
    },
    plugins: [],
};
