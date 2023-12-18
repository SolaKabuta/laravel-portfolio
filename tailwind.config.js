/** @type {import('npx tailwindcss init -p
').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [require('flowbite/plugin')],
}

