/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        first: '#0C7BB3',
      },
      screens: {
        '2xl': '1320px',
        s: '300px',
      },
    },
  },
  plugins: [],
};
