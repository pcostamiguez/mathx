/** @type {import('tailwindcss').Config} */

import typography from "@tailwindcss/typography"
import daisyui from "daisyui"

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    daisyui: {
        themes: ["light", "dark", "corporate"],
    },
    theme: {
        extend: {},
    },
    plugins: [
        typography,
        daisyui,
    ],
}

