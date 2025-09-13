import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                main: "var(--main-color)",
                button_hover: "var(--button-hover)",
                button_active: "var(--button-active)",
                card_color: "var(--card-color)",

                warning_color: "var(--warning-color)",
                active_color: "var(--active-color)",
                instock_color: "var(--instock-color)",
                out_color: "var(--out-color)",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
