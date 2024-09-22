/** @type {import('tailwindcss').Config} */

import typography from "@tailwindcss/typography"
import daisyui from "daisyui"
import flowbite from "flowbite/plugin"

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    daisyui: {
       themes: ["light", "corporate", "nord"],
    },
    theme: {
        extend: {
            fontFamily: {
                teko: ['Teko', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [
        typography,
        daisyui,
        flowbite({
            charts: true,
            forms: true,
            tooltips: true
        })
    ],
}

