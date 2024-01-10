/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.{html,php,js}",
    "./assets/templates/*.{html,php,js}"
  ],
  theme: {
    extend: {
      colors:{
        "menu": "#121212",
        "background-1": "#fb665f",
        "background-2": "#98c7d9",
        "background-3": "#ebca60",
        "background-menu": "rgba(0,0,0,.1)",
      },
      fontFamily: {
        'roboto': ['Roboto', 'Arial', 'sans-serif'],
        'anton': ['Anton', 'sans-serif'],
      },
      fontSize: {
        'xs': '.70rem',
      },
      /* Animación de la marquesina de festival.php */
      animation: {
        marquee: 'marquee 25s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
      },
    /*Fin animación marquesina */
    },
  },
  variants: {},
  plugins: [
    require('tailwindcss-animated')
  ],
}
