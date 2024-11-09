const activePage = window.location.href; // Mengambil URL lengkap
const navLinks = document.querySelectorAll("nav a");
navLinks.forEach((link) => {
  link.classList.remove("active");
});
navLinks.forEach((link) => {
  if (link.href === activePage) {
    link.classList.add("active");
  }
});
