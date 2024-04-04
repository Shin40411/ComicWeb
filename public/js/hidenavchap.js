var chap = document.getElementById("chapter-ctrl");
$(document).ready(function() {
  if(chap){
    $('.sticky-top').removeClass('sticky-top');
    $('.autohide').removeClass('autohide').addClass('scrolled');
  }
});
