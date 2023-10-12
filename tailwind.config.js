/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['app/Views/**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
};

