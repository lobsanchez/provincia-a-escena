/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.{html,php,js}",
    "./assets/templates/*.{html,php,js}"
  ],
  theme: {
    container: {
      center: true,
      screens:{
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1600px',
      }
    }, 
    extend: {  
      colors:{
        "menu": "#121212",
        "background-1": "#fb665f",
        "background-2": "#98c7d9",
        "background-3": "#ebca60",
        "background-menu": "rgba(0,0,0,.1)",
        "sancti": "#343363",
        "lumbrales": "#fba433",
        "villoria": "#99ffff",
        "macotera": "#cb5443",
        "aldeadavila": "#8ccbcc",
        "alba": "#648bc3",
        "monleras": "#cb6434",
        "doñinos": "#fba433",
        "sequeros": "#cb5443",
        "guijuelo": "#343363",
        "vitigudino": "#648bc3",
        "ledesma": "#cb6434",
        
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
        fadeup: 'fade-up 1s both',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
        fadeup: {
          '0%':  {
              opacity: '0.5',
              transform: 'translateY(600px)',
          },
          '100%': {
              opacity: '1',
              transform: 'translateY(0)',
          },
      }
      
      },
    /*Fin animación marquesina */
    },
  },
  variants: {},
  plugins: [
    require('tailwindcss-animated')
  ],
}
