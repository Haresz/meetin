/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "meetBlack" : "#1A1A1A",
        "meetGray" : "#1A1A1A80;",
        "meetPurpel" : "#2E31FB",
        "meetRed" : "#EE3434",
        "meetBtnP" : "#D8F4D7",
        "meetBtnPT" : "#34B532",
      },
      fontFamily : {
        "inter" : ['Inter', 'sans-serif'],
        "link" : ['Poppins', 'sans-serif'],
        "conten": ['Noto Serif', 'serif'],
      },
      fontWeight:{
        normal: 400,
        medium: 500,
        semibold: 600,
        bold: 700,
      },
      backgroundImage: {
        "services1" : "url('services-1.png')",
        "services2" : "url('services-2.png')",
        "services3" : "url('services-3.png')",
        "services4" : "url('services-4.png')",
        "services5" : "url('services-5.png')",
        "services6" : "url('services-6.png')",
        "services7" : "url('services-7.png')"
      }
    },
  },
  plugins: [],
}
