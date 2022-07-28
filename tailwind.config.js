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
                    301: "#A8E0FF",
                    601: "#2984D5",
                    901: "#0661B0",
                    902: "#0661B0",
                },
                yellow: {
                    901: "#FCD41C",
                },
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                roboto: ["Roboto", "sans-serif"],
                cormorantSc: ["Cormorant SC", "serif"],
            },
            spacing: {
                "1/2screen": "50vh",
                0.2: "1px",
                18: "4.625rem",
                75: "18.75rem",
                94: "22.5rem",
                95: "28.875rem",
                102: "32.188rem",
                103: "35.563rem",
                105: "53.313rem",
                "1/1.1": "90%",
                "1/1.2": "95%",
                "1/1.3": "45%",
            },
        },
    },
    plugins: [],
};
