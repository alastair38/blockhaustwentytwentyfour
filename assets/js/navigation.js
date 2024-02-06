// Adds current-menu-item class to custom menu links. Use the absolute URL when adding a custom link

function setCurrentMenuItemClass() {
  const menuItems = document.querySelectorAll('.wp-block-navigation-item');

  if (!menuItems.length) {
    return;
  }

  // Check for .current-menu-item class on any item and stop if found.
  for (let i = 0; i < menuItems.length; i++) {
    if (menuItems[i].classList.contains('current-menu-item')) {
      menuItems[i].classList.remove('current-menu-item');
    }
  }

  // Add trailing slash to path if missing.
  const url = window.location.href.endsWith('/')
    ? window.location.href
    : `${window.location.href}/`;

  // Check for matching URL path on any child link of menuItems.
  for (let i = 0; i < menuItems.length; i++) {
    const link = menuItems[i].querySelector('a');
    const linkURL = link.href.endsWith('/') ? link.href : `${link.href}/`;

    // Note: link.href returns full URL, even if it's a relative link.
    if (linkURL === url) {
      menuItems[i].classList.add('current-menu-item');
      link.setAttribute('aria-current', 'page');
    }
  }
}

setCurrentMenuItemClass();

// Source: Cory Hughart https://github.com/WordPress/gutenberg/issues/31452#issuecomment-1537620861
