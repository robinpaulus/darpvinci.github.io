let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

document.querySelector("#close").onclick = () => {
  console.log("Tombol Cancel Diklik");
  document.querySelector(".edit-form-container").style.display = "none";
  window.location.href = "admin.php";
};
