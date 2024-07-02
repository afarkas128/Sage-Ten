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
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

/**
 * Navbar toggler with overlay menu and attach class menu-open to body
 */
const TOGGLER = document.querySelector('.navbar-toggler');

TOGGLER.addEventListener('click', function (e) {
  e.preventDefault();
  TOGGLER.ariaExpanded = !JSON.parse(TOGGLER.ariaExpanded);

  TOGGLER.setAttribute(
    'aria-pressed',
    TOGGLER.matches('[aria-pressed=true]') ? 'false' : 'true',
  );

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

/**
 * Scrollpos styler
 */
// ScrollPosStyler;
