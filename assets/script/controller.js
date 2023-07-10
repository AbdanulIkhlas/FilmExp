//! ----------- Style Index ---------------- 

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

//? Mengambil semua elemen label dengan id "judul"
var labels = document.querySelectorAll("label#judul");

//? Proses loop setiap elemen label dan mengambil nilai teksnya
labels.forEach(function(label) {
  var container = label.parentNode;
  var containerWidth = container.offsetWidth - 10;
  var valueLabel = label.innerText;

  //? Memeriksa apakah teks melebihi lebar kontainer
  if (label.scrollWidth > containerWidth) {
    var truncatedText = valueLabel;

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


