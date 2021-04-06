const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
    theme: {
        container: {
            center: true,
          },
    },
    variants: {
        extend: {
            
        }
    },
  plugins: [
  ],
}
