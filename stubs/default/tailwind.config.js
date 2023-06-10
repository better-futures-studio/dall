const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: ["class", '[data-theme="dark"]'],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    content: [
        "./app/**/*.php",
        "./resources/**/*.html",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.ts",
        "./resources/**/*.tsx",
        "./resources/**/*.php",
        "./resources/**/*.vue",
        "./resources/**/*.twig",
    ],
    plugins: [require("daisyui")],
    daisyui: {
        themes: true,
        logs: false,
    },
};
