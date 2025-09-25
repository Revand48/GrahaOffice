/** @type {import('tailwindcss').Config} */
import plugin from 'tailwindcss/plugin'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import aspectRatio from '@tailwindcss/aspect-ratio'

export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FFFBEF',
        dark: '#0F0F0F',
        accent: '#FACC15',
        soft: '#FDF6E3',
        muted: '#A0AEC0',
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
        display: ['Poppins', 'ui-sans-serif'],
      },
      boxShadow: {
        soft: '0 4px 6px rgba(0, 0, 0, 0.05)',
        glow: '0 0 8px rgba(250, 204, 21, 0.6)',
      },
      animation: {
        fade: 'fadeOut 2s ease-in-out',
        pulseSlow: 'pulse 3s ease-in-out infinite',
      },
      keyframes: {
        fadeOut: {
          '0%': { opacity: 1 },
          '100%': { opacity: 0 },
        },
      },
    },
  },
  plugins: [
    forms,
    typography,
    aspectRatio,
    plugin(function ({ addUtilities }) {
      addUtilities({
        '.text-shadow': {
          textShadow: '1px 1px 2px rgba(0,0,0,0.1)',
        },
        '.text-shadow-md': {
          textShadow: '2px 2px 4px rgba(0,0,0,0.2)',
        },
      })
    }),
  ],
}
