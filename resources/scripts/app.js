import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';
// import {ScrollPosStyler} from 'scrollpos-styler';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) {
  import.meta.webpackHot.accept((error) => {
    console.error('HMR Error:', error);
  });
}

/**
 * Navbar toggler with overlay menu and attach class menu-open to body
 */
const navbarToggler = document.querySelector('.navbar-toggler');

if (navbarToggler) {
  navbarToggler.addEventListener('click', function (e) {
    e.preventDefault();

    const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
    navbarToggler.setAttribute('aria-expanded', !isExpanded);
    navbarToggler.setAttribute('aria-pressed', !isExpanded);

    document.body.classList.toggle('menu-open');

    /**
     * Get navbar dropdown menus
     */
    const navbarDropdownMenus = document.querySelectorAll(
      '.navbar-nav li.menu-item.dropdown ul.dropdown-menu',
    );

    // Remove the d-block class from the navbar dropdown menu
    navbarDropdownMenus.forEach((menu) => {
      if (menu.classList.contains('d-block')) {
        menu.classList.remove('d-block');
      }
    });
  });
} else {
  console.warn('Navbar toggler not found');
}

/**
 * Scrollpos styler
 */
// Uncomment and initialize when ScrollPosStyler is ready for use.
// ScrollPosStyler.init();
