window.onscroll = function() {myFunction()};

var navbar = document.getElementById("chapter-ctrl");

var sticky = navbar.offsetTop;

function myFunction() {
  if (navbar){
    if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    } else {
    navbar.classList.remove("sticky");
    }
  }
}