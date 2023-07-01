//! Action ketika list navbar di klik
const listNavbar = document.querySelectorAll('.li-navbar');

listNavbar.forEach((navbar) => {
  const dropdown = navbar.querySelector('.dropdown');

  navbar.addEventListener('click', () => {
    dropdown.classList.toggle('active');
  });
});