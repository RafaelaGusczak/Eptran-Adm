/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
 
        darkBlue: {
          100: "#ccd7de",
          200: "#9aafbd",
          300: "#67889b",
          400: "#35607a",
          500: "#023859",
          600: "#022d47",
          700: "#012235",
          800: "#011624",
          900: "#000b12"
        }
      }
    },
  },
  plugins: [],
}