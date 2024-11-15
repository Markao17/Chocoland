(function () {
  "use strict";
  // Switching to mobile: https://developer.mozilla.org/en-US/docs/Web/API/MediaQueryList/onchange
  const isMobile = window.matchMedia(
    "(max-width: " +
      getComputedStyle(document.body).getPropertyValue(
        "--custom--media-max-width--sm"
      ) +
      ")"
  );
  const navigationResponsiveContainer = document.querySelector(
    ".site-header .wp-block-navigation__responsive-container"
  );
  isMobile.onchange = (e) => {
    if (e.matches) {
      // <= Mobile
    } else {
      // > Mobile
      // Autoclose header nav container if modal is open and browser window gets resized.
      if (
        document.body.contains(navigationResponsiveContainer) &&
        navigationResponsiveContainer.classList.contains("is-menu-open")
      ) {
        document
          .querySelector(
            ".site-header .wp-block-navigation__responsive-container-close"
          )
          .click();
      }
    }
  };
})();
