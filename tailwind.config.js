const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './public/*.html',
    './src/*.css',
    './src/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'display': ['"Early GameBoy"', 'ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', "Liberation Mono", "Courier New", 'monospace'],
    },
    colors: {
      // Build your palette here
      transparent: 'transparent',
      current: 'currentColor',
      white: colors.white,
      black: colors.black,
      gray: colors.warmGray,
      primary: colors.cyan,
      secondary: colors.red,
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
