let simplexp_hamburger = document.querySelector(".hamburger-icon");
let simplexp_navbar = document.querySelector(".navbar");
let simplexp_menu = document.querySelector(".menu");
let simplexp_hamburgerIcon = document.querySelector('.hamburger-icon button');

// Show menu on mobile
simplexp_hamburger.addEventListener("click", function() {

  simplexp_navbar.classList.toggle('open');
  simplexp_hamburger.classList.toggle('close');

});




/* FAQ Toggler */
let simplexp_faq_items = document.querySelectorAll('.faq .wp-block-columns.faq-title');

simplexp_faq_items.forEach((item) => {
	item.addEventListener("click", function(e) {
		e.preventDefault();
		item.nextElementSibling.classList.toggle('show-group-block');
	});
});




// Menu Keyboard Navigation
simplexp_navbar.addEventListener('keydown', function(event) {
  
    var menuItems = simplexp_navbar.querySelectorAll('.menu-item > a');
    var firstMenuItem = menuItems[0];
    var lastMenuItem = menuItems[menuItems.length - 1];
    if(simplexp_navbar.classList.contains('open')) {
      if(event.key === 'Tab') {
        if(event.shiftKey) { // Shift + Tab
          if(document.activeElement === firstMenuItem) {
            event.preventDefault();
            simplexp_hamburgerIcon.focus();
            // console.log("perche shift tab");
          }

        } else { // Tab
          if(document.activeElement === lastMenuItem) {
            event.preventDefault();
            simplexp_hamburgerIcon.focus();
            // console.log("perche tab");
          }
        }
      }
    }
});



simplexp_hamburgerIcon.addEventListener('keydown', function(event) {

  var menuItems = simplexp_navbar.querySelectorAll('.menu-item > a');
  var firstMenuItem = menuItems[0];
  var lastMenuItem = menuItems[menuItems.length - 1];
  if(simplexp_navbar.classList.contains('open')) {
    if(event.shiftKey) {
      // console.log(document.activeElement);
      event.preventDefault();
      // console.log('Il focus è arrivato sull\'icona dell\'hamburger utilizzando Shift+Tab.');
      lastMenuItem.focus();
    }else if(event.key === 'Tab') {
      // console.log(document.activeElement);
      event.preventDefault();
      // console.log('Il focus è arrivato sull\'icona dell\'hamburger utilizzando Tab.');
      firstMenuItem.focus();
    }
  }

});

simplexp_hamburgerIcon.addEventListener('keyup', function(event) {
  if(event.key === 'Enter') {
    console.log("Enter on ham");
    if(simplexp_navbar.classList.contains('open')) {
      document.querySelector('.navbar .menu > li:first-child > a').focus();
    }
  }
});



