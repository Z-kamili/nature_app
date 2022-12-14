/** @type {import('tailwindcss').Config} */
const { colors } = require('laravel-mix/src/Log');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {

    content: [
        './resources/views/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
    ],

    theme: {
        extend: {
            colors:{
              transparent:'transparent',
              current:'currentColor',
              black: colors.black,
              white:colors.white,
              gray:colors.trueGray,
             'gray-background':'#f7f8fc',
             'blue':'#328af1',
             'blue-hover':'#2879bd',
             'yellow':'#ffc73c',
             'red':'#ec454f',
             'green':'#1aab8b',
             'purple':'#8b60ed'
            },
            boxShadow:{
                card:'4px 4px 15px 0 rgba(36,37,38,0.08)',
                dialog:'3px 4px 15px 0 rgba(36 , 37, 38, 0.08)',
            },
            spacing: {
                44:'11rem',
               70:'17.5rem',
               175:'43.75rem'
            },
            maxWidth:{
              custom:'62.5rem',
            },
            fontFamily: {
                sans: ['Open Sans',...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xss:['0.625rem',{lineHeight:'1rem'}],
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
