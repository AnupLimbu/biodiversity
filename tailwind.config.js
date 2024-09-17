/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.css",
      "./node_modules/tw-elements/js/**/*.js"
  ],
  theme: {
    extend: {
        screens: {
            'nav-break': '1285px',
        },
    },
  },
  plugins: [
      require("tw-elements/plugin.cjs")
  ],
}

