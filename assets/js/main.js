const openBars = document.getElementById('open-bars');
const closeButton = document.getElementById('close-button');
const mobileMenu = document.getElementById('mobile-menu-wrapper');


function showMobile() {
    mobileMenu.style.display = 'block';
    openBars.style.display = 'none';
    closeButton.style.display = 'block';
}
function hideMobile() {
    mobileMenu.style.display = 'none';
    openBars.style.display = 'block';
    closeButton.style.display = 'none';
}
