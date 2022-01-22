const bodyPage = document.querySelector('body');
const openMenuButton = document.querySelector('.ph-list-thin');
const closeMenuButton = document.querySelector('.ph-x-thin');
const menuItems = document.querySelector('.menu-items');
const menuLinkOne = document.querySelector('.nl1');
const menuLinkTwo = document.querySelector('.nl2');
const menuLinkThree = document.querySelector('.nl3');
const menuLinkFour = document.querySelector('.nl4');
const menuLinkFive = document.querySelector('.nl5');
const menuLinkSix = document.querySelector('.nl6');

/* Mobile navigation menu appears when you click the menu button */

openMenuButton.addEventListener('click',()=> {
    menuItems.classList.add('menu-items-appear');
    closeMenuButton.classList.add('close-menu-appears');
    openMenuButton.classList.add('menu-button-disappears');
    bodyPage.classList.add('body-stop-scrolling');
});

/* Mobile navigation menu disappears when you click the X button */

function closeMenu() {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
}

closeMenuButton.addEventListener('click',()=> {
    closeMenu();
});

/* Mobile navigation menu disappears when you click individual menu links */

menuLinkOne.addEventListener('click',()=> {
    closeMenu();
});

menuLinkTwo.addEventListener('click',()=> {
    closeMenu();
});

menuLinkThree.addEventListener('click',()=> {
    closeMenu();
});

menuLinkFour.addEventListener('click',()=> {
    closeMenu();
});

menuLinkFive.addEventListener('click',()=> {
    closeMenu();
});

menuLinkSix.addEventListener('click',()=> {
    closeMenu();
});




