/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    borderWidth: {
        DEFAULT: '1px',
        '0': '0',
        '2': '2px',
        '3': '3px',
        '4': '4px',
        '6': '6px',
        '8': '8px',
      },
    fontSize: {
      sm:'15px',
      ssm:'12px',
      'nav1':'66px',
      '5xl': '3.052rem',


    },
    extend: {
        opacity: {
            '90': '.90',
          },
        lineHeight:{
            'extra-loose': '2.5',
            '12': '3rem',
        },
        colors: {
          'blacknav' : '#1F1F1F',
          'blacknav2' : '#232323',
          'yellownav' : '#FBBD02',
          'orangenav' : '#EE780A',
          'bordertrans' : '#F8F8F8',
          'cardprod' : "#EDEDED",
          'card' : '#E7E9E6',
          'cardcolor': '#FF7538',
          'greytext' : '#333333',
          'background1': '#F2F1ED'
        },
        height: {
            '128': '48rem',
            '7xl': '4.5rem',
        },
        fontFamily: {
            'montserrat': ['Montserrat'],
            'roboto' : ['Roboto'],
            'lato': ['Lato'],
            'garamond': ['Garamond']
        },
    },
  },
  plugins: [],
}

