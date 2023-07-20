/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'montserrat': ['Montserrat'],
      },
      colors:{
        'theme-blue': '#295F9E',
        'theme-light-blue':'#347ACA',
        'theme-red': '#D02E26'
      }
    },
  },
  plugins: [],
}

