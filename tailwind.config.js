/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html', './dist/**/*.{html,php,js}'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#0C7BB3',
        bgawal: '#D9D9D9',
        bgsign: '#0C7BB3',
      },
      screens: {
        '2xl': '1320px',
        s: '300px',
      },
    },
  },
  plugins: [],
};
