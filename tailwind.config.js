/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  "./template-parts/**/*.php",
  "./*.php",
  "./js/*.js"

  ],
  theme: {

    fontFamily: {
      'raleway': ['Raleway'],
      'abel': ['Abel'],
      'hat': ['Red Hat Display'],
      
    },
    container: {
      center: true,
    },

 
    

    extend: {

      "colors": {
        "peruvip": {
          "50": "#ffcd5d",
          "100": "#fac353",
          "200": "#f0b949",
          "300": "#e6af3f",
          "400": "#dca535",
          "500": "#d29b2b",
          "600": "#c89121",
          "700": "#be8717",
          "800": "#b47d0d",
          "900": "#aa7303"
        },
      },

         maxHeight: {
        116: "29rem",
        /*464px*/
        125: "31.25rem",
        /*500px*/
        140: "35rem",
        /*560px*/
        150: "37.5rem",
        /*600px*/
        190: "47.5rem",
        /*760px*/
      },
      height: {
        104:"18rem",
        116: "29rem",
        /*464px*/
        125: "31.25rem",
        /*500px*/
        140: "35rem",
        /*560px*/
        150: "37.5rem",
        /*600px*/
        190: "47.5rem",
        /*760px*/
      },

    },
  },
  plugins: [],
}
