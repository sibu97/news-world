/** @type {import('tailwindcss').Config} */
export default {
 
  content: [
'./resources/**/*.blade.php',
    './resources/**/**/*.blade.php',
    './resources/**/**/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',

  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#001338',
      },
    },
  },
  plugins: [],
}

