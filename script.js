const bodyPage = document.querySelector('body');
const openMenuButton = document.querySelector('.ph-list-thin');
const closeMenuButton = document.querySelector('.ph-x-thin');
const menuItems = document.querySelector('.mobile-menu-shadow');
const menuLinkOne = document.querySelector('.link1');
const menuLinkTwo = document.querySelector('.link2');
const menuLinkThree = document.querySelector('.link3');
const menuLinkFour = document.querySelector('.link4');
const menuLinkFive = document.querySelector('.link5');
const menuLinkSix = document.querySelector('.link6');

/* Mobile navigation menu appears when you click the menu button */

openMenuButton.addEventListener('click',()=> {
    menuItems.classList.add('menu-items-appear');
    closeMenuButton.classList.add('close-menu-appears');
    openMenuButton.classList.add('menu-button-disappears');
    bodyPage.classList.add('body-stop-scrolling');
});

/* Mobile navigation menu disappears when you click the X button */

closeMenuButton.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});

/* Mobile navigation menu disappears when you click individual menu links */

menuLinkOne.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});

menuLinkTwo.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});

menuLinkThree.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});

menuLinkFour.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});

menuLinkFive.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});

menuLinkSix.addEventListener('click',()=> {
    menuItems.classList.remove('menu-items-appear');
    closeMenuButton.classList.remove('close-menu-appears');
    openMenuButton.classList.remove('menu-button-disappears');
    bodyPage.classList.remove('body-stop-scrolling');
});




