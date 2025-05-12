// tailwind.config.js
module.exports = {
    content: [
        "./resources/**/*.blade.php", // atau sesuai struktur folder kamu
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.jsx",
        "./resources/**/*.tsx",
    ],
    theme: {
        extend: {
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
            },
            colors: {
                hmtg_primary: "#F1430E",
            },
        },
    },
};
