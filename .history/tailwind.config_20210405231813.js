const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
    theme: {
        container: {
            padding: {
                DEFAULT: '12px',
                sm: "14px",
                lg: "20px",
                '2xl': '28px',
            }
          },
    },
    variants: {
        container: [],
        extend: {
            
        }

    },
  plugins: [
  ],
  corePlugins: {
    // ...
   container: false,
  }
}
