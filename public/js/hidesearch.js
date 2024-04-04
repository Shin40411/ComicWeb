function hideSearchAdvance() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Ẩn khung tìm kiếm";
      moreText.style.display = "inline";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Hiện khung tìm kiếm";
      moreText.style.display = "none";
    }
  }