/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{php,html,js}",
    "./index.php",
    "./rutas.php"
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          blue: '#0F265C',
          light: '#1B4196',
          red: '#E31937',
          gray: '#F8F9FA'
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
