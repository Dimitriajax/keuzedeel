/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['*.{html,js}'],
  theme: {
    screens : {
      md: '820px'
    },
    extend: {
      colors : {
        pink : '#E2539F',
        base : '#F2F2F2',
        yellow : '#E8D155',
        green : '#8AFF67',
        blue : '#40EEEE'
      }
    },
  },
  plugins: [],
}
