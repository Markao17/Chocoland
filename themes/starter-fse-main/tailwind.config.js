/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "#ffffff",
      black: "#000000",
      primary: "var(--wp--preset--color--primary)",
      secondary: "var(--wp--preset--color--secondary)",
      tertiary: "var(--wp--preset--color--tertiary)",
    },
    extend: {},
  },
  plugins: [],
};
