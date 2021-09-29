const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './**/*.php',
    './src/**/*.css'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    colors: {
      ...colors,
      'blue': '#3752AB',
      'blue-dark': '#293D80',
      'red': '#D12B43',
      'green': '#37AC44'
    },
    fontFamily: {
      body: ['"Raleway"', 'ui-sans-serif', 'sans-serif'],
      display: ['"Sanchez"', 'ui-serif', 'serif']
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
