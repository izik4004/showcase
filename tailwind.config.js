module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      gridColumnStart: {

        '13': '13',

        '14': '14',

        '15': '15',

        '16': '16',

        '17': '17',
       },
       gridColumnEnd: {

        '13': '13',

        '14': '14',

        '15': '15',

        '16': '16',

        '17': '17',
       }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
