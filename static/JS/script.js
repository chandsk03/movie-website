function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

document.getElementById("reload").addEventListener("click", function(event) {
  event.preventDefault(); // Prevent the default behavior of the link
  location.reload(); // Reload the page
});