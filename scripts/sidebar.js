// const activePage = window.location.href; // Mengambil URL lengkap
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("nav a");
navLinks.forEach((link) => {
  link.classList.remove("active");
});
navLinks.forEach((link) => {
  console.log(link.href);
  console.log(link.href.split("/"));
  if (activePage.startsWith(`/${link.href.split("/")[3]}`)) {
    link.classList.add("active");
  }
});
