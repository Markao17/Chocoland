/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "#ffffff",
      black: "#000000",
      primary: "#3a170d",
      secondary: "var(--wp--preset--color--secondary)",
    },
    extend: {},
  },
  plugins: [],
};
