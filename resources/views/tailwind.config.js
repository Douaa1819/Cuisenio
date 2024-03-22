/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
      extend: {},
    },
    plugins: [
      function ({ addVariant }) {
          addVariant('child', '& > *');
      }
  ],
  }
  module.exports = {
    theme: {
      extend: {
        colors: {
          'custom-color': '#FDA794',
        },
      },
    },
  }