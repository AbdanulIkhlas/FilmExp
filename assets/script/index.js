//! Action ketika list navbar di klik maka keluar dropdown
const listNavbar = document.querySelectorAll('.li-navbar');

listNavbar.forEach((navbar) => {
    const dropdown = navbar.querySelector('.dropdown');

    navbar.addEventListener('click', () => {
        dropdown.classList.toggle('active');
    });

});

//! ketika user klik di luar dropdown (menutup dropdown)
document.addEventListener('click', (event) => {
    const dropdowns = document.querySelectorAll('.dropdown');
  
    dropdowns.forEach((dropdown) => {
      if (!dropdown.parentNode.contains(event.target)) {
        dropdown.classList.remove('active');
      }
    });
  });
