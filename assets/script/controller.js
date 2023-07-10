//! ----------- Style Index ---------------- 

//! Action ketika list navbar di klik maka keluar dropdown
const listNavbar = document.querySelectorAll('.li-navbar');

listNavbar.forEach((navbar) => {
  const dropdown = navbar.querySelector('.dropdown');
  const downIcon = navbar.querySelector('.down-icon');

  navbar.addEventListener('click', () => {
    downIcon.classList.toggle('rotate-icon');
    dropdown.classList.toggle('active');
  });
  
});

//! ketika user klik di luar dropdown (menutup dropdown)
document.addEventListener('click', (event) => {
  const dropdowns = document.querySelectorAll('.dropdown');
  const downIcons = document.querySelectorAll('.down-icon');

  dropdowns.forEach((dropdown, index) => {
    if (!dropdown.parentNode.contains(event.target)) {
      downIcons[index].classList.remove('rotate-icon');
      dropdown.classList.remove('active');
    }
  });
});


//? Mengambil semua elemen label dengan id "judul"
let labels = document.querySelectorAll("label#judul");

//? Proses loop setiap elemen label dan mengambil nilai teksnya
labels.forEach(function(label) {
  let container = label.parentNode;
  let containerWidth = container.offsetWidth - 10;
  let valueLabel = label.innerText;

  //? Memeriksa apakah teks melebihi lebar kontainer
  if (label.scrollWidth > containerWidth) {
    let truncatedText = valueLabel;

    while (label.scrollWidth > containerWidth && truncatedText.length > 0) {
      truncatedText = truncatedText.slice(0, -1);
      label.innerText = truncatedText + "...";
    }
  }

  console.log(label.innerText);
});


//! action ketika judul di hover 
let label = document.getElementById("judul");
let tooltip = document.getElementById("tooltip");

label.addEventListener("mouseover", function() {
  tooltip.style.display = "block";
});

label.addEventListener("mouseout", function() {
  tooltip.style.display = "none";
});

//! ----------- End Style Index ---------------- 


